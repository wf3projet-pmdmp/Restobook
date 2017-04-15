<?php /* app/Model/CommentModel.php */
namespace Model;

class ContactModel extends \W\Model\Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->setPrimaryKey('id_contact');
    }
    
    public function countUsers()
    {
        $sql = 'SELECT COUNT(*) as total FROM contact WHERE msgread = 0';

        $select = $this->dbh->prepare($sql);
        
        if(!$select->execute()){
            return false;
        } else {
            $result = $select->fetch();            
            return $result;
        }

    }
    
    /**
	 * Effectue une selection sur la valeur de la colonne msgread
	 * @return mixed false si erreur, le résultat de la recherche sinon
	 * @return array Les données sous forme de tableau multidimensionnel
	 */
    public function unread()
    {
        $sql = 'SELECT * FROM '.$this->table.' WHERE msgread = 0';
        $select = $this->dbh->prepare($sql);
        
        if(!$select->execute()){
            return false;
        } else {
            $result = $select->fetchAll();
            return $result;
        }
    }
        
    /**
	 * Effectue une selection sur la valeur de la colonne msgread
	 * @return mixed false si erreur, le résultat de la recherche sinon
	 * @return array Les données sous forme de tableau multidimensionnel
	 */
    public function read()
    {
        $sql = 'SELECT * FROM '.$this->table.' WHERE msgread = 1';
        $select = $this->dbh->prepare($sql);
        
        if(!$select->execute()){
            return false;
        } else {
            $result = $select->fetchAll();
            return $result;            
        }
    }
    

}