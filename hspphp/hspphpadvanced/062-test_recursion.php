<?php
header("content-type:text/html;charset=utf-8");
/* 第1题:用递归的方式救出斐波那契数
1,1,2,3,5,8,13...
给你一个整数n,求出它的值是多少?
$n=6  ==>8
$n=7  ==>13
 */
function fbnq($n)
{
    if ($n > 2) {
        return fbnq($n - 1) + fbnq($n - 2);

    } else {
        return 1;
    }
}
echo $res = fbnq(8);
