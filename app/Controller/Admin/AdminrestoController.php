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
        $restoModel = new RestaurantsModel();
        $restos = $restoModel->findAll();
        $params = [
            'restos' => $restos
        ];

        $this->show(SELF::PATH_VIEWS.'/list', $params);
    }

    public function add()
    {
        $this->show(SELF::PATH_VIEWS.'/add');

    }
    
    public function view($id)
    {
        $restoModel = new UsersModel();
        $restos = $restoModel->proprio($id);
        
        $params = [
            'restos' => $restos,
        ];
        $this->show(SELF::PATH_VIEWS.'/view', $params);

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