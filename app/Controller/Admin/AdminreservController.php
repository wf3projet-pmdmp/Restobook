<?php

namespace Controller\Admin;

use \W\Controller\Controller;
use Model\ReservationsModel;
use Model\RestaurantsModel;
use Model\UsersModel;

class AdminreservController extends Controller
{

    // Dossiers contenant les vues
    const PATH_VIEWS = 'admin/reserv';

    public function listAll()
    {
        $this->show(SELF::PATH_VIEWS.'/list');

    }

    public function view()
    {
        $this->show(SELF::PATH_VIEWS.'/view');

    }
}