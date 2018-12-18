<?php
header("content-type:text/html;charset=utf-8");
// break 的使用
$i = 0;
while (++$i) {
    switch ($i) {
        case 5:
            echo "quit at 5<br>";
            break;
        case 10:
            echo "quit at 10<br>";
            // break 后面如果有数字,表示跳出往外第几重循环
            break 2;
        default:
            break;
    }
}
echo '$i=' . $i;
