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
}