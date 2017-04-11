<?php

namespace Controller\Admin;

use \W\Controller\Controller;
use Model\RestaurantsModel;
use Model\UsersModel;

class AdminrestoController extends Controller
{

    // Dossiers contenant les vues
    const PATH_VIEWS = 'admin/resto';

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