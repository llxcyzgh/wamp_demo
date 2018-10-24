<?php
header("content-type:text/html;charset=utf-8");
$a = 0.58 * 100;
echo intval($a);// 57

echo '<br>';

//$a = gmp_mul('0.58', '100');
$b = bcmul('0.58', '100');
echo intval($b);// 58