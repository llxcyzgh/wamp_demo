<?php
//正向预查 逆向预查
$str1 = 'dzhouweiguo,dzhengweiguo';// 查询 zhouweiguo
$str2 = 'coming quick,going quick, ing';// 查询 XXing

$reg1 = '/\w+(?<=zhou)weiguo/';
$reg2 = '/\w+(?=ing)\w+/';
//$reg2 = '/\w+(?=ing)/';
//$reg2 = '/\w+ing/';


preg_match_all($reg1, $str1, $match1);
var_dump($match1);

preg_match_all($reg2, $str2, $match2);
var_dump($match2);