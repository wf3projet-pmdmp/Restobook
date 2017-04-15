<?php

namespace Model;

use \W\Model\Model as Model;
use \W\Security\AuthentificationModel As Auth;

/**
* 
*/
class ResetpswModel extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this->setPrimaryKey('id');
    }

    public function findtoken($tokenfinal)
    {
        $sql = 'SELECT id, email, token FROM '.$this->table.' WHERE token = :token';
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(':token',$tokenfinal);
        $sth->execute();

        return $sth->fetch();
    }

}