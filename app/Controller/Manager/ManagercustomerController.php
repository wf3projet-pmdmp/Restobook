<?php

namespace Controller\Manager;

use Model\RestaurantsModel;
use Model\ReservationsModel;

class ManagercustomerController extends \W\Controller\Controller
{

    // Dossiers contenant les vues
    const PATH_VIEWS = 'manager/customer';

    public function createCoupon()
    {

        $this->show(SELF::PATH_VIEWS.'/createcoupon');
    }

    public function listReserv()
    {
        $this->show(SELF::PATH_VIEWS.'/listreserv');

    }

}