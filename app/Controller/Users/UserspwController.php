<?php

namespace Controller\Users;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \Model\UsersModel;
use Respect\Validation\Validator as v;

class UserspwController extends \W\Controller
{

    // Dossiers contenant les vues
    const PATH_VIEWS = 'users';

    public function pwforgot()
    {
        $this->show(SELF::PATH_VIEWS.'/pwforgot');
    }
    // Fin Méthode

    public function newpass()
    {
        $this->show(SELF::PATH_VIEWS.'/newpass');
    }
    // Fin Méthode
}