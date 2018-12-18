<?php
function getTreeCategory($cat_list, $p_id = 0, $space = '')
{
    static $arr = array();
    foreach ($cat_list as $k => $v) {
        // 谁的parent_id是0,谁就是0的子类
        if ($v['parent_id'] == $p_id) {
            $v['cat_name'] = $space . $v['cat_name'];
            $arr[]         = $v;
            // 再次查询该分类下的子类
            getTreeCategory($cat_list, $v['cat_id'], $space . '+');
        }
    }
    return $arr;
}

/*function getTreeCategory($cat_list, $p_id = 0)
{
    static $arr = array();
    static $space = '';
    foreach ($cat_list as $k => $v) {
        if ($v['parent_id'] == $p_id) {
            $space = $v['parent_id'] == 0 ? '' : $space . '+';

            $v['cat_name'] = $space . $v['cat_name'];
            $arr[]         = $v;
            getTreeCategory($cat_list, $v['cat_id']);
        }
    }
    return $arr;
}*/


$cat_list = array(
    array('cat_id' => '1', 'cat_name' => 'it', 'parent_id' => '0'),
    array('cat_id' => '2', 'cat_name' => 'military', 'parent_id' => '0'),
    array('cat_id' => '3', 'cat_name' => 'php', 'parent_id' => '1'),
    array('cat_id' => '4', 'cat_name' => 'thinkphp', 'parent_id' => '3'),
    array('cat_id' => '5', 'cat_name' => '伊拉克', 'parent_id' => '2'),
    array('cat_id' => '5', 'cat_name' => 'java', 'parent_id' => '1')
);

$arr = getTreeCategory($cat_list, 0);
var_dump($arr);

