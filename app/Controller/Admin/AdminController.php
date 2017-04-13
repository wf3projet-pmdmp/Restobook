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
        $countUsers = new UsersModel();
        $countU = $countUsers->countUser();
        
        $countResto = new RestaurantsModel();
        $countR = $countResto->countResto();
        
        $countContact = new ContactModel();
        $countC = $countContact->countContact();
        
        $countReserv = new ReservationsModel();
        $countRes = $countReserv->countReserv();
        
        $params = [
            'countU' => $countU,
            'countR' => $countR,
            'countC' => $countC,
            'countRes' => $countRes
        ];
        
        $this->show(SELF::PATH_VIEWS.'/home', $params);
    }
}