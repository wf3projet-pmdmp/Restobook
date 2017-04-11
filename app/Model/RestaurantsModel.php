<?php /* app/Model/CommentModel.php */
namespace Model;

class RestaurantsModel extends \W\Model\Model 
{
    public function __construct(){
        parent::__construct();
        $this->setPrimaryKey('id_resto');
    }
    
    public function research($search)
    {
        $sql = 'SELECT * FROM '.$this->table.' AS r
        JOIN events AS e ON r.id_resto = e.id_resto
        WHERE r.name LIKE :search OR r.email LIKE :search OR r.address LIKE :search OR r.city LIKE :search OR r.phone LIKE :search OR r.speciality LIKE :search OR r.description LIKE :search 
        OR e.title LIKE :search OR e.type LIKE :search OR e.content LIKE :search';
        
        $select = $this->dbh->prepare($sql);
        $select->bindValue(':search', '%'.$search.'%');

        if(!$select->execute()){
            return false;
        } else {
            return $select->fetchAll();
        }
    }
    

}