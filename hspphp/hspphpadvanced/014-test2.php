<?php
header("content-type:text/html;charset=utf-8");
/* 判断一个(表单传递过来的)数是不是整数?
1.只要是表单提交的数据,都是string类型 "20"
2.有一个函数strpos(),如果去检查 $age 是否含有小数点 "."
 */
$age = '123.4a';
// is_numeric() 检测变量是否为数字或数字字符串
// 123a 不是一个数字字符串,数字字符串中必须是纯数字
if (is_numeric($age) && !strpos($age, '.')) {
    echo '是一个整数';
} else {
    echo '是一个小数';
}

$num = '123.0';
echo is_numeric($num) ? 'yes' : 'no';
