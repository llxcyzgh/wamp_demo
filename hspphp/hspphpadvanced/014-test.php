<?php
header("content-type:text/html;charset=utf-8");
/*
在接收一个表单提交的数据时,如何防止该变量不存在就去接收的问题?
 */
$name   = isset($_GET['name']) ? $_GET['name'] : '';
$age    = isset($_GET['age']) && is_numeric($_GET['age']) ? $_GET['age'] : '';
$salary = isset($_GET['salary']) && is_numeric($_GET['salary']) ? $_GET['salary'] : '';
if ($name == '' || $age == '' || $salary == '') {
    echo '你的输入有误!';
} else {
    echo '你输入的信息是: ' . $name . ' ' . $age . ' ' . $salary;
}

/* 判断一个(表单传递过来的)数是不是整数?
1.只要是表单提交的数据,都是string类型 "20"
2.有一个函数strpos(),如果去检查 $age 是否含有小数点 "."
 */
