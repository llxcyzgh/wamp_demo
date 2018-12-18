<?php

namespace admin\model;

use framework\core\Model;

/*
 * 分类模型: 主要操作ask_category 分类表
 */

/*
 * 创建表的sql语句
create table ask_category(
cat_id int,
cat_name varchar(32),
cat_logo varchar(128),
cat_desc varchar(32),
parent_id int
)engine=myisam default charset=utf8;
 */

class CategoryModel extends Model
{
    // 该模型类操作category表
    public $logic_table = 'category';

    // 递归查询所有分类信息
    // 参数1:查询的数组
    // 参数2:查询哪个分类下面的子类,默认值是0,表示查询顶级分类下面的子类
    public function getTreeCategory($cat_list, $p_id = 0, $level = 0)
    {
        static $arr = array();
        foreach ($cat_list as $k => $v) {
            // 谁的parent_id是0,谁就是0的子类
            if ($v['parent_id'] == $p_id) {
                $v['cat_level'] = $level;
                $arr[]          = $v;
                // 再次查询该分类下的子类
                $this->getTreeCategory($cat_list, $v['cat_id'], $level + 1);
            }
        }
        return $arr;
    }
}


