<?php

namespace home\model;
use framework\core\Model;
class GoodsModel extends Model
{
    public function goods_select($sql)
    {
        return $this->dao->fetchAll($sql);
    }

    public function goods_add()
    {
        return $this->dao->exec($sql);
    }
}