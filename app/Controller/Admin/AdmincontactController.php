<?php

namespace Controller\Admin;

use \W\Controller\Controller;
use Model\ContactModel;
use Model\RestaurantsModel;
use Model\UsersModel;

class AdmincontactController extends Controller
{

    // Dossiers contenant les vues
    const PATH_VIEWS = 'admin/contact';

    public function listAll()
    {
        $this->show(SELF::PATH_VIEWS.'/list');

    }

    public function view($id)
    {
        $this->show(SELF::PATH_VIEWS.'/view');

    }
}