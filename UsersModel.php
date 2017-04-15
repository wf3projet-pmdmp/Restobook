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
    
    public function findmail($email)
    {
        if (!is_string($email)){
            return false;
        }

        $sql = 'SELECT * FROM ' . $this->table . ' WHERE email = :email LIMIT 1';
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(':email', $email);
        $sth->execute();

        return $sth->fetch();
    }
    
    public function updatemail(array $data, $id, $stripTags = true)
    {
        if (!is_string($id)){
            return false;
        }

        $sql = 'UPDATE ' . $this->table . ' SET ';
        foreach($data as $key => $value){
            $sql .= "`$key` = :$key, ";
        }
        // Supprime les caractères superflus en fin de requète
        $sql = substr($sql, 0, -2);
        $sql .= ' WHERE email = :id';

        $sth = $this->dbh->prepare($sql);
        foreach($data as $key => $value){
            $value = ($stripTags) ? strip_tags($value) : $value;
            $sth->bindValue(':'.$key, $value);
        }
        $sth->bindValue(':id', $id);

        if(!$sth->execute()){
            return false;
        }
        return $this->find($id);
    }

    
}

