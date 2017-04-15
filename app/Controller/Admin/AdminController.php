<?php

namespace Controller\Admin;

use \W\Controller\Controller;
use Model\ContactModel;
use Model\ReservationsModel;
use Model\RestaurantsModel;
use Model\UsersModel;

class AdminController extends Controller
{

    // Dossiers contenant les vues
    const PATH_VIEWS = 'admin';

    public function home()
    {
        
        
        $countContact = new ContactModel();
        $countC = $countContact->countUsers();
        
       
        
       $params = [
            
            'countC' => $countC,
            
        ];
        
       $this->show(SELF::PATH_VIEWS.'/home', $params);
    }
}