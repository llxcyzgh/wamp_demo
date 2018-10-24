<?php
//require_once 'Model.class.php';
namespace home\model;

use framework\core\Model;

class GoodsModel extends Model
{
    protected $logic_table = 'goods';//当前sql操作对应的表名

    // 增加一个商品
    public function goods_add()
    {
        $sql    = "INSERT INTO ecs_goods VALUES (NULL,'admin',123)";
        $result = $this->dao->exec($sql);
        return $result;
    }

    // 删除一个商品
    public function goods_delete()
    {

    }

    // 修改一个商品
    public function goods_update()
    {

    }

    // 查询一个商品
    public function goods_select()
    {
        $sql    = "SELECT goods_id,goods_name,goods_price FROM ecs_goods";
        $result = $this->dao->fetchAll($sql);
        return $result;
    }


}

