<?php
header("content-type:text/html;charset=utf-8");
/*
设计一个自己的myUsort(),完成自定义排序(在函数内使用冒泡);
 */
function myUsort(&$arr_name, $func_name = 'myfc')
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
    if ($a == $b) {
        return 0;
    }
    return $a > $b ? 1 : -1;
}

$arr = array(1, 6, 52, 3, 250, 105, 0, 4, 90, 999, 808);
myUsort($arr);
echo '<pre>';
print_r($arr);

echo '<hr>';
$arr2 = array('lily', 'green', 'lebron', 'ben', 'michael');
function xs($a, $b)
{
    return strlen($a) > strlen($b) ? 1 : -1;
}
myUsort($arr2, 'xs');
echo '<pre>';
print_r($arr2);
