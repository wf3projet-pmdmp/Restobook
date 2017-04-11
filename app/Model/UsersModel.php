<?php /* app/Model/CommentModel.php */
namespace Model;

class UsersModel extends \W\Model\UsersModel 
{
    public function __construct()
    {
        parent::__construct();
        $this->setPrimaryKey('id_user');
    }
    
    
}