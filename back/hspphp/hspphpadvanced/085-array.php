<?php
header("content-type:text/html;charset=utf-8");
// 数组的使用(引用)
$arr = array(2, 5, 'no1' => 'hello');
echo $arr[0] . '<br>';
echo $arr['no1'] . '<br>';

//细节1:如果使用了不存在的键,提示一个undefined offset
echo $arr[5]; // notice错误
echo 'ok <br>';

//细节2:数组下标值的增长是当前最大值+1
$arr2    = array(2, 3);
$arr2[9] = 56;
$arr2[]  = 100;
echo '<pre>';
print_r($arr2);
