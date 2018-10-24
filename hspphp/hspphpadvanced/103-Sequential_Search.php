<?php
header("content-type:text/html;charset=utf-8");
// 查找: 在数组中查询是否有某个值? 如果有,返回下标;如果没有,返回无
// Sequential Search   顺序查找法
$arr = array(0, -1, 90, 23, 567, 0);
function search($arr, $find_value)
{
    $flag      = 0;
    $arr_index = array();
    foreach ($arr as $key => $value) {
        if ($value == $find_value) {
            echo '找到了,下标是' . $key . '<br>';
            $arr_index[] = $key;
            $flag++;
        }
    }

    if (!$flag) {
        echo '该数组中没有这个值';
        return false;
    }
    return $arr_index;
}
$arr_index = search($arr, 00);
echo '<pre>';
print_r($arr_index);
