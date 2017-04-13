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
        $restoModel = new RestaurantsModel();
        $listresto = $restoModel->findAll();
        $params = [
            'listresto' => $listresto
        ];

        $this->show(SELF::PATH_VIEWS.'/list', $params);
    }
    // Fin Méthode

    public function view($id)
    {
        $restoModel = new RestaurantsModel();
        $viewresto = $restoModel->find($id);

        $params = [
            'viewresto' => $viewresto,
        ];
        $this->show(SELF::PATH_VIEWS.'/view', $params);
    }
    // Fin Méthode

    public function contactresto()
    {
        $this->show(SELF::PATH_VIEWS.'/contactresto');
    }
    // Fin Méthode

}
// Fin Controller