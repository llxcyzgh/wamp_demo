<?php
header("content-type:text/html;charset=utf-8");
// 用函数输出九九乘法表
multiple(9);
function multiple($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . ' × ' . $i . ' = ' . $j * $i . '&emsp;&emsp;';
        }
        echo '<br><br>';
    }
}
// multiple(3);
