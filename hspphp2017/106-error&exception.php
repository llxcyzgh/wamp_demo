<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/7
 * Time: 15:07
 */
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

/*
常见错误类型:

Notice错误：提示，不影响代码的执行

Warning警告：不影响代码的执行

Fatal致命错误：导致程序停止

Syntax：语法错误

Deprecated：不兼容、过时的错误
 */

// notice
echo $name;
echo '<hr>';

// warning
gettype();
echo '<br>';

// fatal
//getMoney();
echo '<br>';

// syntax
//var_dump('abc'));
echo '<br>';

// deprecated
$conn = mysql_connect('localhost','root','');