<?php
header("content-type:text/html;charset=utf-8");
// 变量处理(相关)函数
// isset() 的使用;如果变量存在,并且不为null,返回true
$a = '';
if (isset($a)) {
    echo '$a存在,并且不为null<br>'; // 注意:为''空字符串,可以显示
}

// unset() 的使用;销毁指定的变量
$b = 100;
if (isset($b)) {
    echo '$b 存在<br>';
}
unset($b);
if (isset($b)) {
    echo '$b 存在<br>';
} else {
    echo '$b 不存在<br>';
}

// empty()  检查一个变量是否为空
$c = 100; // 不为空
$c = ''; // 为空
$c = null; // 为空
if (empty($c)) {
    echo '$c 为空<br>';
} else {
    echo '$c 不为空<br>';
}

// gettype() 返回某个变量对应的数据类型
$d = true;
echo gettype($d) . '<br>';
$e = 123.5;
if (is_float($e)) {
    echo '$e 是一个float <br>';
}
