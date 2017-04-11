<?php

namespace Controller\Manager;

use Model\ContactModel;
use Model\UsersModel;

class ManagercontactController extends \W\Controller\Controller
{

    // Dossiers contenant les vues
    const PATH_VIEWS = 'manager/contact';

    public function listAll()
    {

        $this->show(SELF::PATH_VIEWS.'/list');
    }

    public function view($id)
    {

        $this->show(SELF::PATH_VIEWS.'/view');
    }

}