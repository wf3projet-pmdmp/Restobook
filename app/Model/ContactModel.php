<?php /* app/Model/CommentModel.php */
namespace Model;

class ContactModel extends \W\Model\UsersModel 
{
    /*public function __construct()
    {
        parent::__construct();
        $this->setPrimaryKey('id_user');
    }*/
    
    public function countContact()
    {
        $sql = 'SELECT COUNT(*) as total FROM contact';

        $select = $this->dbh->prepare($sql);
        $select->execute();
        $result = $select->fetch();

        return $result;
    }

}