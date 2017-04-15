<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\RestaurantsModel;

class DefaultController extends Controller
{
    const PATH_VIEWS = 'default';
	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
        $restomodel = new RestaurantsModel();
        $randpicture = $restomodel->randompicture();
        /*debug($randpicture);*/
        
        $datas = [
            'randpicture'   => $randpicture
        ];
        
        
        $this->show(SELF::PATH_VIEWS.'/home', $datas);
	}
    // Fin Méthode Home
    
    public function legal()
    {
        $this->show(SELF::PATH_VIEWS.'/legal');
    }
    // Fin Méthode Legal
    
    public function credits()
    {
        $this->show(SELF::PATH_VIEWS.'/credits');
    }
    // Fin Méthode Crédit
}
// Fin Controller