<?php /* app/Model/CommentModel.php */
namespace Model;

class RestaurantsModel extends \W\Model\Model 
{
    public function __construct()
    {
        parent::__construct();
        $this->setPrimaryKey('id_resto');
    }
    public function countResto()
    {
        $sql = 'SELECT COUNT(*) as total FROM restaurants';

        $select = $this->dbh->prepare($sql);
        $select->execute();
        $result = $select->fetch();

        return $result;
    }


}