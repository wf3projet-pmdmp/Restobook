<?php

namespace Controller\Restaurant;

use Model\RestaurantsModel;

class RestocustomerController extends \W\Controller
{

    // Dossiers contenant les vues
    const PATH_VIEWS = 'restaurant/customer';

    public function reserv()
    {

        $this->show(SELF::PATH_VIEWS.'/reserv');
    }

    public function showCoupon($id)
    {
        $this->show(SELF::PATH_VIEWS.'/showcoupon');

    }

}