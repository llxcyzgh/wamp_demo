<?php
header("content-type:text/html;charset=utf-8");
// 三元运算符/三目运算符/条件运算符
$a   = 1;
$res = $a == 1 ? 100 : 'hello';
echo $res . '<br>';

// 细节1.三元运算的表达式可以是函数返回的值
function getSum($num1, $num2)
{
    return $num1 + $num2;
}
function getVal($num1, $num2)
{
    return $num1 - $num2;
}
$num1 = 100;
$num2 = 200;
$res  = $num1 > $num2 ? getSum($num1, $num2) : getVal($num1, $num2);
echo $res . '<br>';

// 细节2.三元运算符的经典使用,用于判断获取的表单是否满足条件
$acttion = (empty($_POST['action'])) ? 'default' : $_POST['action'];

// The above is identical to this if/else statement
if (empty($_POST['action'])) {
    $action = 'default';
} else {
    $action = $_POST['action'];
}

// empty() 还是 isset()? 由业务逻辑决定
/*
empty()  是"","0","0.0"... 都是 empty
isset() 是设置过这个值,并且不为 null
 */
