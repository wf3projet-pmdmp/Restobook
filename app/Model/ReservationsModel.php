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


}