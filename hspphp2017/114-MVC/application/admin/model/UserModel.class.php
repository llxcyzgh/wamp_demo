<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/8
 * Time: 11:21
 * 用户模型类, 主要操作用户表
 */

//require_once 'Model.class.php';
namespace admin\model;

use framework\core\Model;

class UserModel extends Model
{
    // 增加一个用户
    public function user_add()
    {
        $sql = "INSERT INTO user VALUES (NULL,admin,admin123)";
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