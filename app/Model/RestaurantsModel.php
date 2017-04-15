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
        $sql = 'SELECT id_event, r.id_resto, name, city, phone, speciality, description, picture_header 
        FROM '.$this->table.' AS r 
        JOIN 
        events AS e 
        ON r.id_resto = e.id_resto 
        WHERE e.content LIKE :search OR 
        e.title LIKE :search OR 
        e.type LIKE :search OR
        e.content LIKE :search OR
        r.name LIKE :search OR 
        r.city LIKE :search OR 
        r.phone LIKE :search OR 
        r.speciality LIKE :search OR 
        r.description LIKE :search OR 
        r.picture_header LIKE :search 
        GROUP BY r.id_resto';
        
        $select = $this->dbh->prepare($sql);
        $select->bindValue(':search', '%'.$search.'%');

        if(!$select->execute()){
            return false;
        } else {
            $searching = $select->fetchAll();
            return $searching;
        }
        
    }
    
    public function randompicture()
    {
        $sql = 'SELECT * FROM '.$this->table.' ORDER BY RAND() LIMIT 6';
        
        $select = $this->dbh->prepare($sql);
        
        if(!$select->execute()){
            return false;
        } else {
            $randpicture = $select->fetchAll();
            return $randpicture;
        }
    }
    

}

