<?php
header("content-type:text/html;charset=utf-8");
/*
设计一个自己的myUsort(),完成自定义排序(在函数内使用冒泡);
 */
// $arr = array(1, 6, 52, 3, 4);
$arr = array('hello', 'pen', 'morning', 'o');
// $arr = array(1, 2, 3, 4, 5, 6, 7);
// $arr = range(1, 500);
echo date('H:i:s') . '<br>';
myUsort($arr, 'myfc');
echo date('H:i:s') . '<br>';
echo '<pre>';
print_r($arr);

function myUsort(&$arr_name, $func_name)
{
    $len = count($arr_name);
    for ($i = 0; $i < $len - 1; $i++) {
        $flag = 0;
        for ($j = 0; $j < $len - 1 - $i; $j++) {
            $res = $func_name($arr_name[$j], $arr_name[$j + 1]);
            if ($res == 1) {
                $temp             = $arr_name[$j];
                $arr_name[$j]     = $arr_name[$j + 1];
                $arr_name[$j + 1] = $temp;
                $flag             = 1;
            }
        }
        if (!$flag) {
            return;
        }
    }
}

function myfc($a, $b)
{
/*    if ($a == $b) {
return 0;
}
return $a > $b ? 1 : -1;  */
    $a = strlen($a);
    $b = strlen($b);
    if ($a == $b) {
        return 0;
    }
    return $a > $b ? 1 : -1;
}
