<?php
namespace Model;

class ReservationsModel extends \W\Model\Model 
{
    public function countReserv()
    {
        $sql = 'SELECT COUNT(*) as total FROM reservations';

        $select = $this->dbh->prepare($sql);
        $select->execute();
        $result = $select->fetch();

        return $result;
    }

    public function listAll()
    {

        $reservationsModel = new ReservationsModel();
        $reservations = $reservationsModel->findAll();
        $params = [
            'reservations' => $reservations
        ];

        $this->show(SELF::PATH_VIEWS.'/list', $params);
    }

    public function view($id)
    {
         $ReservationsModel = new ReservationsModel();
        $reservations = $reservationsModel->find($id);
        $params = [
            'reservations' => $reservations,
        ];

        $this->show(SELF::PATH_VIEWS.'/view', $params);

    }


}