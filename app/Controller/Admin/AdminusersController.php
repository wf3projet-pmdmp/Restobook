<?php

namespace Controller\Admin;

use \W\Controller\Controller;
use Model\AdminModel;
use Model\GestrestoModel;
use Model\RestaurantsModel;
use Model\UsersModel;

class AdminusersController extends Controller
{

    // Dossiers contenant les vues
    const PATH_VIEWS = 'admin/users';

    public function listAll()
    {

        $this->show(SELF::PATH_VIEWS.'/list');
    }

    public function add()
    {
        $this->show(SELF::PATH_VIEWS.'/add');

    }

    public function view($id)
    {
        $this->show(SELF::PATH_VIEWS.'/view');

    }

    public function up($id)
    {

        $this->show(SELF::PATH_VIEWS.'/up');
    }

    public function del($id)
    {

        $this->show(SELF::PATH_VIEWS.'/del');
    }
    
    public function search()
    {
        // Définition des variables
        $post = [];
        $errors = [];
        $noResult = false;
        
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
            
            if(count($errors) === 0){ // s'il n'y a aucune erreur...
                
                $datas = [
                    'search'    => $post['search'],
                    'noResult'  => $noResult
                ];
                    
                
                // On instancie la class permettant de récupérer toutes les méthodes de RestoModel ou de \W\Model\Model
                $usersModel = new UsersModel();
                
                $rsearch = $usersModel->search($datas);
                /*debug($rsearch);*/
                if(count($rsearch) === 0) {
                    $noResult = true;
                }
        
                
            } else {
                $errorsText = implode('<br>', $errors);
                
            }
            
            
        }  // endif(!empty($_POST));
        
        // Les variables que l'on transmet à la vue. Les clés du tableau ci-dessous deviendront les variables qu'on utilisera dans la vue.
        $params = [

            'errors' => $errors,
            'rsearch'   => $rsearch,
            'noResult'  => $noResult

        ];   
        $this->show(SELF::PATH_VIEWS.'/listusers', $params);
        
    }
    // Fin Méthode
}