<?php
header("content-type:text/html;charset=utf-8");
$arr1    = array(1, 2, 3);
$arr2    = $arr1;
$arr2[0] = 3.33;
var_dump($arr1);
var_dump($arr2);
