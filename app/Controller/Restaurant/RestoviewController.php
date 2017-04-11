<?php

namespace Controller\Restaurant;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \Model\RestaurantsModel;
use \Model\UsersModel;
use \Model\EventsModel;

use Respect\Validation\Validator as v;

class RestoviewController extends Controller
{
    // Dossiers contenant les vues
    const PATH_VIEWS = 'restaurant/resto';
    /**
	 * Page d'accueil par défaut
	 */
    public function listAll()
    {
        $this->show(SELF::PATH_VIEWS.'/list');
    }
    // Fin Méthode

    public function view($id)
    {
        $this->show(SELF::PATH_VIEWS.'/view');
    }
    // Fin Méthode

    public function contactresto($id)
    {
        $this->show(SELF::PATH_VIEWS.'/contactresto');
    }
    // Fin Méthode

}
// Fin Controller