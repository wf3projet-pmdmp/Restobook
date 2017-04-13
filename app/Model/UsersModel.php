<?php /* app/Model/CommentModel.php */
namespace Model;

class UsersModel extends \W\Model\UsersModel 
{
    public function __construct()
    {
        parent::__construct();
        $this->setPrimaryKey('id_user');
    }
    
    public function countUser()
    {
        $sql = 'SELECT COUNT(*) as total FROM users';

        $select = $this->dbh->prepare($sql);
        $select->execute();
        $result = $select->fetch();

        return $result;
    }
    
    public function proprio($id_prop)
    {
        $sql = 'SELECT r.*, u.lastname, u.firstname FROM restaurants AS r INNER JOIN users AS u ON r.id_user = u.id_user WHERE r.id_resto = :id';
        
        $select = $this->dbh->prepare($sql);
        $select->bindValue(':id', $id_prop);
        
        if($select->execute()){
            return $select->fetchAll();
        } else {
            return false;
        }
    }
    
}