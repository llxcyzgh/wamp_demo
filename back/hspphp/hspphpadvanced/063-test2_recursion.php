<?php
header("content-type:text/html;charset=utf-8");
/* 第2题:已知:
f(1)=3;
f(n)=2*f(n-1)+1
请使用递归的思想编程,求出f(n)的值?
 */
function fx($n)
{
    if ($n == 1) {
        return 3;
    } else {
        return 2 * fx($n - 1) + 1;
    }
}
$n = 16;
echo 'fx(' . $n . ') = ' . fx($n);
