<?php
header("content-type:text/html;charset=utf-8");
$w   = 'd';
$day = '';
switch ($w) {
    case 'a':
        $day = '星期一';
        break;
    case 'b':
        $day = '星期二';
        break;
    case 'c':
        $day = '星期三';
        break;
    case 'd':
        $day = '星期四';
        break;
    case 'e':
        $day = '星期五';
        break;
    case 'f':
        $day = '星期六';
        break;
    case 'g':
        $day = '星期日';
        break;
}
echo $day;

$n = 50;
switch ($n) {
    default:
        echo 'n';
    case '5':
        echo '5';
}

$nn = 50;
switch ($nn) {
    case $nn > 30: // 很少这种用法.一般涉及到不确定个数的范围用if,具体的值用switch
        echo '<hr>5';
        break;
    default:
        echo 'n';
}
