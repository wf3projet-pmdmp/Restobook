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
        $restoModel = new RestaurantsModel();
        $listresto = $restoModel->findAll();

        $params = [
            'listresto' => $listresto
        ];
        
        $this->show(SELF::PATH_VIEWS.'/list', $params);
    }
    // Fin Méthode

    public function view($id)
    {
        $restoModel = new RestaurantsModel();
        $viewresto = $restoModel->find($id);
        
        $params = [
            'viewresto' => $viewresto,
        ];
        $this->show(SELF::PATH_VIEWS.'/view', $params);
    }
    // Fin Méthode

    public function contactresto($id)
    {
        $this->show(SELF::PATH_VIEWS.'/contactresto');
    }
    
    public function research()
    {
        
        // Définition des variables
        $post = [];
        $errors = [];
        $success = false;
        $errorsText = '';
        
        // Si la superglobale n'est pas vide, le formulaire a été soumis
        if(!empty($_POST)){
            
            // On reconstruit les données en retirant les espaces en début et fin de chaîne (trim)
            // Puis en supprimant les balises html & php
            foreach($_POST as $key => $value){
                $post[$key] = trim(strip_tags($value));
            }
            
            if(empty($post['search'])){
                $errors[]= "Entré une recherche";
            }
            
            if(!v::numeric()->validate($post['range'])){
                $errors[] = 'La zone de proximité n\'est pas défini';
            }
            
            if(count($errors) === 0){ // s'il n'y a aucune erreur...
                
                $datas = [
                    'search'    => $post['search'],
                    'range'     => $post['range'],
                ];
                    
                
                // On instancie la class permettant de récupérer toutes les méthodes de RestoModel ou de \W\Model\Model
                $restoModel = new RestaurantsModel();
                
                $rsearch = $restoModel->research($datas['search']);
                debug($rsearch); die;

                $success = true;
                    //Afficher en couleur les mots..
                
                
            } else {
                $errorsText = implode('<br>', $errors);
                var_dump($errorsText);
            }
        } else { 
            // Les variables que l'on transmet à la vue. Les clés du tableau ci-dessous deviendront les variables qu'on utilisera dans la vue.
            $params = [
                'success'   => $success,
                'errorText' => $errorsText,
                'rsearch'   => $rsearch
            ];   
           $this->show(SELF::PATH_VIEWS.'/search', $params);
        }
    }
    // Fin Méthode

}
// Fin Controller