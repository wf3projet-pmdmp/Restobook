<?php

namespace Controller\Users;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \Model\UsersModel;
use Respect\Validation\Validator as v;

class UsersController extends Controller
{
    // Dossiers contenant les vues
    const PATH_VIEWS = 'users';
    
    public function register()
    {
        
        $userModel = new UsersModel();
        $regist =[]; // Contiendra les données du formulaire nettoyées
        $errors =[]; // Contiendra les éventuelles erreurs
        $success = false;

        // Si la superglobale n'est pas vide, le formulaire a été soumis
        if(!empty($_POST)){

            // On reconstruit les données en retirant les espaces en début et fin de chaîne (trim)
            // Puis en supprimant les balises html & php
            foreach($_POST as $key => $value){
                $regist[$key] = trim(strip_tags($value));
            }

            if(!v::alpha()->length(3, 20)->validate($regist['lastname'])){
                $errors[] = "Le nom doit contenir entre 2 et 30 caractères !";
            }
            
            if(!v::alpha()->length(3, 20)->validate($regist['firstname'])){
                $errors[] = "Le prénom doit contenir entre 2 et 30 caractères !";
            }
            
            if(!v::email()->notEmpty()->validate($regist['email'])){
                $errors[] = 'Le champ email n\'est pas valide !';
            }

            if(!v::alnum()->noWhitespace()->length(8, 20)->validate($regist['password'])){
                $errors[] = 'Le mot de passe doit contenir entre 8 et 20 caractères';
            }
            
            if(!v::phone()->notEmpty()->validate($regist['phone'])){
                $errors[] = 'Saisissez une adresse mail valide !';
            }
            
            if(!v::length(8, 100)->validate($regist['address'])){
                $errors[] = 'Le champ adresse doit contenir entre 8 et 30 caractères!';
            }
            
            if(!v::length(3, 20)->validate($regist['city'])){
                $errors[] = 'Le champ ville doit contenir 3 et 20 caractères !';
            }
            
            if(!v::numeric()->length(5, 5)->validate($regist['zipcode'])){
                $errors[] = 'Le mot de passe doit contenir entre 8 et 20 caractères';
            }


            if(count($errors) === 0){

                $password = new AuthentificationModel();
                $hash = $password->hashPassword($regist['password']);
                $datas = ["lastname"   => $regist["lastname"],
                          "firstname"   => $regist["firstname"],
                          "email"      => $regist["email"],
                          "password"   => $hash,
                          "phone"      => $regist["phone"],
                          "address"      => $regist["address"],
                          "city"      => $regist["city"],
                          "zipcode"      => $regist["zipcode"],
                          "role"        => 'user'
                         ];

                $userModel->insert($datas);
                $success = true;
            }else{

            }

        }
        $this->show(SELF::PATH_VIEWS.'/register', ['errors' => $errors, 'success' => $success]);
    }
    
    public function login()
    {
        $login =[]; // Contiendra les données du formulaire nettoyées
        $errors =[]; // Contiendra les éventuelles erreurs
        $success = false;


        // Si la superglobale n'est pas vide, le formulaire a été soumis
        if(!empty($_POST)){

            // On reconstruit les données en retirant les espaces en début et fin de chaîne (trim)
            // Puis en supprimant les balises html & php
            foreach($_POST as $key => $value){
                $login[$key] = trim(strip_tags($value));
            }

            if(!v::email()->notEmpty()->validate($login['email'])){
                $errors[] = 'Le champ email n\'est pas valide !';
            }

            if(!v::alnum()->noWhitespace()->length(8, 20)->validate($login['password'])){
                $errors[] = 'Le mot de passe doit contenir entre 8 et 20 caractères';
            }


            if(count($errors) === 0){

                $enter = new AuthentificationModel;
                $loguser = $enter->isValidLoginInfo($login['email'], $login['password']);
                $success = true;

                if(!empty($loguser)){
                    $login = new AuthentificationModel();
                    $login->logUserIn($loguser);
                }
                else { // password_verify
                    $errors[] = 'Erreur ! Resaisissez vos identifiants !';
                }
            }
            else { // utilisateur inexistant, donc email inexistant en bdd
                $errors[] = 'Erreur ! Resaisissez vos identifiants !';
            }
        }
        $this->show(SELF::PATH_VIEWS.'/login', ['errors' => $errors, 'success' => $success]);
    }
    
    public function logout()
    {
        $this->show(SELF::PATH_VIEWS.'/logout');
    }
    // Fin Méthode
    
    public function update()
    {
        $this->show(SELF::PATH_VIEWS.'/update');
    }
    // Fin Méthode
    
    
}
