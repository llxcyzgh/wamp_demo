<?php
header("content-type:text/html;charset=utf-8");
// php变量命名的说明
// 一般含数字,字母,_组成,但是不要以数字开头
$user_name12  = '小骊';
$_user_name12 = '小马';
var_dump($user_name12, $_user_name12);

/* 注意
1.php变量名前必须带上$符号
2.php变量区分大小写,但函数不区分大小写
3.php变量命名一定要有一定含义,常使用英语或者拼音
4.php命名可以用驼峰法(userName)或者下下划线法(user_name)或者帕斯卡命名法(UserName)
5.php变量可以是关键字(if 等),但是不推荐
 */

$address = '北京';
$Address = '上海';
var_dump($address, $Address);
function hello()
{
    echo 'abc ! hello ! <br>';
}
hello();
Hello();
HELLO();

$if = 123;
echo $if;
