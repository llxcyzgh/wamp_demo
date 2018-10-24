<?php
header("content-type:text/html;charset=utf-8");
/*
找到 $arr = array('小猫','小狗','小马'); 看看有没有 '小马',如果有就从数组中删除
 */
$arr = array('小猫', '小狗', '小马');
// 这里不严谨, 因为找到的下标位置可能为0
if ($key = array_search('小马', $arr)) {
    unset($arr[$key]);
}
echo '<pre>';
print_r($arr);
