<?php

namespace Controller\Restaurant;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \Model\RestaurantsModel;
use \Model\UsersModel;
use \Model\EventsModel;

use Respect\Validation\Validator as v;

class RestoviewController extends Controller
{
    // Dossiers contenant les vues
    const PATH_VIEWS = 'restaurant/resto';
    /**
	 * Page d'accueil par défaut
	 */
    public function listAll()
    {
        $this->show(SELF::PATH_VIEWS.'/list');
    }
    // Fin Méthode

    public function view($id)
    {
        $this->show(SELF::PATH_VIEWS.'/view');
    }
    // Fin Méthode

    public function contactresto()
    {
        $errors = [];
        $post = [];

if(!empty($_POST)){

    $post = array_map('trim', array_map('strip_tags', $_POST));

    if(strlen($post['firstname']) < 3){
        $errors[] = 'Le prénom doit comporter au moins 3 caractères';
    }
    if(strlen($post['lastname']) < 3){
        $errors[] = 'Le nom doit comporter au moins 3 caractères';
    }
     
    if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Votre e-mail n'est pas au bon format"; 
    }
    
    if(strlen($post['text-area']) < 5){
        $errors[] = 'Votre message doit comporter au moins 5 caractères';
    }


    if(count($errors) === 0){
        $result = '<p style="color:green">Bienvenue '.$post['firstname'].'</p>';
    }
    else { 
        $result = '<p style="color:red">'.implode('<br>', $errors).'</p>';
    }

    echo $result;
}
        $this->show(SELF::PATH_VIEWS.'/contactresto');
    }
    // Fin Méthode

}
// Fin Controller