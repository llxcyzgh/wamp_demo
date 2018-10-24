<?php

namespace home\model;
class UserModel extends Model
{
    // 增加一个用户
    public function user_add()
    {
        $sql    = "INSERT INTO user VALUES (NULL,admin,admin123)";
        $result = $this->dao->exec($sql);
        return $result;
    }

    // 删除一个用户
    public function user_delete()
    {

    }

    // 修改一个用户
    public function user_update()
    {

    }

    // 查询一个用户
    public function user_select()
    {

    }


}