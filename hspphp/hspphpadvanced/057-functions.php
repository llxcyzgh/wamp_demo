<?php
header("content-type:text/html;charset=utf-8");
// php内置函数的个数
// 函数的定义: 完成某一功能的程序指令(语句)的集合
// 函数的作用:1.利于代码的复用性;2.利于模块性编程
echo '<pre>';
/*var_dump(get_defined_functions());
print_r(get_defined_functions());*/

/*
@getVal 函数名
@$num1 第一个数
@$num2 第二个数
@$oper 运算符号
 */

function getVal($num1, $num2, $oper)
{
    $res = 0;
    switch ($oper) {
        case '+':
            $res = $num1 + $num2;
            break;
        case '-':
            $res = $num1 - $num2;
            break;
        case '*':
            $res = $num1 * $num2;
            break;
        case '/':
            $res = $num1 / $num2;
            break;
        case '%':
            $res = $num1 % $num2;
            break;
        default:
            echo '运算符不正确';
            break;
    }
    echo 'res=' . $res;
}
getVal(50, 15, '-');
