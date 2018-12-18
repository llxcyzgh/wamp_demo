<?php
header("content-type:text/html;charset=utf-8");
// 算术运算符的使用

$num1 = 9;
$num2 = 8;
$res1 = $num1 + $num2;
$res2 = $num1 - $num2;
$res3 = $num1 * $num2;
$res4 = $num1 / $num2;

/*
取模
1.判断两个数相除的余数
2.通常使用%的方式,来换行显示数据
 */
$res5 = $num1 % $num2;

// 举例:要求每行显示数组的两个数据,然后就换行
$arr = array('hello1', 'hello2', 'hello3', 'hello4', 'hello5');
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . ' ';
    if (!(($i + 1) % 2)) {
        echo '<br>';
    }
}
