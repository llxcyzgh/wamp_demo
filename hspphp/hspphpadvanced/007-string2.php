<?php
header("content-type:text/html;charset=utf-8");
//闭包
/* 当php去执行一个""的内容时,如果它发现有 $变量,他的执行步骤如下:
(1)先找到一个 $变量的值
(2)当找到该变量后,发现有(),就会尝试去执行这个函数.如果没有发现该函数,就报错
 */
function t1()
{
    echo 'hello,t1';
}
$fun_name = 't1';
echo "t1()"; //t1()
echo '<br>';
echo "{$fun_name()}"; // hello,t1
echo '<br>';
echo "{t1()}"; // {t1()}

/*
如何选择使用什么方式来写字符串
(1) 考虑效率的话,尽量使用单引号
(2) 如何要返回大段的html代码,使用heredoc方式
(3) 如果需要拼接很多变量的sql语句,使用双引号
如:
$sql="SELECT id,name FROM table_name WHERE name='$name' and age='$age' LIMIT $start,$offset";

 */
