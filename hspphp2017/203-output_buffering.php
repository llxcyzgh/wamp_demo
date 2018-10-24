<?php
// ob缓冲实现页面静态化
ob_start();
echo 'abcd';
ob_clean();

echo getcwd();

var_dump($_SERVER);
//die;
$thisdir = $_SERVER['SCRIPT_NAME'];
echo $thisdir;