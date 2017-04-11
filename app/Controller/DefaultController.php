<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{
    const PATH_VIEWS = 'default';
	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
        $this->show(SELF::PATH_VIEWS.'/home');
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