<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/30
 * Time: 16:45
 */
// 第四种方式,读取 config.ini 配置文件
/*
 * e:config.ini
user = root
pwd = 123
dbname = tndb
port = 3306
 */
// 定义配置文件路径
$file_full_path = 'e:/config.ini';
$arr_ini = parse_ini_file($file_full_path);

var_dump($arr_ini);
echo '<hr>';
echo 'user = ' . $arr_ini['user'] . '<br>';
echo 'pwd = ' . $arr_ini['pwd'] . '<br>';
echo 'dbname = ' . $arr_ini['dbname'] . '<br>';
echo 'port = ' . $arr_ini['port'] . '<br>';
