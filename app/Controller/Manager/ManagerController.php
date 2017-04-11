<?php
namespace Controller\Manager;

use Model\UsersModel;

use Respect\Validation\Validator as v;
use Intervention\Image\ImageManagerStatic as i;

class ManagerController extends \W\Controller\Controller
{
    // Dossiers contenant les vues
    const PATH_VIEWS = 'manager';
    
    public function home()
    {
        $this->show(SELF::PATH_VIEWS.'/home');
    }
    
}