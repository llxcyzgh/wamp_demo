<?php
header("content-type:text/html;charset=utf-8");
// while 循环
$i = 0;
while ($i < 10) {
    echo 'php程序员' . $i . '<br>';
    $i++;
}

echo '<hr>';
$j = 0;
do {
    echo 'abcdefg' . $j . '<br>';
    $j++;
} while ($j < 10);
