<?php

namespace Controller\Users;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \Model\UsersModel;
use \Model\ResetpswModel;
use Respect\Validation\Validator as v;
use \W\Security\StringUtils as hash;
use \Controller\MasterController as master;

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
                $errors[] = 'Téléphone invalide !';
            }
            
            if(!v::length(8, 100)->validate($regist['address'])){
                $errors[] = 'Le champ adresse doit contenir entre 8 et 30 caractères!';
            }
            
            if(!v::length(3, 20)->validate($regist['city'])){
                $errors[] = 'Le champ ville doit contenir 3 et 20 caractères !';
            }
            
            if(!v::numeric()->length(5, 5)->validate($regist['zipcode'])){
                $errors[] = 'Le code postal est incorrect';
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
        $logout = new AuthentificationModel;
        $logout = logUserOut();
        
        $this->redirectToRoute('default_home');
    }
    // Fin Méthode
    
    public function update()
    {
        $this->show(SELF::PATH_VIEWS.'/update');
    }
    // Fin Méthode
    
    public function pwforgot()
    {
        $login = [];
        $errors = [];

        if (!empty($_POST)) {

            $users = new UsersModel();
            $recover = new ResetpswModel();
            $login = array_map('trim', array_map('strip_tags', $_POST));

            if (!v::email()->notEmpty()->validate($login['email'])) {
                $errors = 'Le champ email est invalide !';
            }

            if (count($errors) === 0) {

                if ($users->emailExists($login['email'])) {
                    $token = hash::randomString();

                    $data = [
                        'email' => $login['email'],
                        'token' => $token
                    ];

                    if ($recover->insert($data)) {
                        master::mailTo($login['email'], $token);
                        $result = '<p class="alert alert-info"> Mail envoyer veuillez vérifier votre boîte mail</p>';
                        echo $result;
                        $this->redirectToRoute('users_login');
                    }
                } else {
                    $result = '<p class="alert alert-danger">Mail non reconnu !</p>';
                    echo $result;
                }
            }
        }
        $this->show('users/pwforgot');
    }

    public function newpass()
    {
        /*
        -verifier si le token existe en paramettre, sinon viré la personne
        -recup le token en url
        -verif si le token existe en bdd
        -proposer a l'utilisateur de pouvoir modifier ses infos (on a le mail du contact en bdd, donc on peu l'identifier)
        -update le mdp
        -supprimer le token recu dans la bdd (permet une utilisation unique du token)
        enjoy :)
        */
        $errors = [];
                $post = [];
                $errorspass = [];
            
        if (isset($_GET['token']) && !empty($_GET['token'])) {
            $token = $_GET['token'];
            $test = new ResetpswModel();
            $tokenfinal = $test->findtoken($token);
            //debug($tokenfinal);
            if ($test->findtoken($token)) {
                
                if (!empty($_POST)) {

                    debug($_POST);
                    foreach($_POST as $key => $value){
                        $post[$key] = trim(strip_tags($value));
                    }
                    
                    if(!v::alnum()->noWhitespace()->length(8, 20)->validate($post['password'])){
                        $errorspass = 'Le mot de passe doit contenir entre 8 et 20 caractères';
                    }

                    if (count($errorspass) === 0) {
                        $id = $tokenfinal['email'];
                        $data = [
                            'password' => password_hash($post['password'], PASSWORD_DEFAULT),
                        ];
                        debug($data);

                        $newMdp = new UsersModel();
                        $update = $newMdp->findmail($id);
                            debug($update);
                            
                        if ($newMdp->updatemail($data, $id)) {
                            echo 'OK';
                            $this->redirectToRoute('/users/login');

                        }

                    } else {
                        $result = '<div class="alert alert-danger">'.$errorspass.'</div>';
                        echo $result;
                        
                    }
                }
                $datas = [
                    'errors'      => $errors,
                    'errorspass'  => $errorspass,
                ];
                
                $this->show('users/newpass', $datas);
                
        
            }
            else
            {
                showForbidden();
            }
    
        }
        
    }
            
        
        
}
    

