<?php
header("content-type:text/html;charset=utf-8");
// continue语句
// continue的作用是跳出当前循环
/*
continue 在循环结构用用来跳过本次循环中剩余的代码并在条件求值为真时开始执行下一次循环。
Note: 注意在 PHP 中 switch 语句被认为是可以使用 continue 的一种循环结构。
continue 接受一个可选的数字参数来决定跳过几重循环到循环结尾。默认值是 1，即跳到当前循环末尾。
 */
for ($i = 0; $i < 13; $i++) {
    if ($i == 10) {
        continue;
    }
    echo '$i=' . $i . '<br>';
}

echo '<hr>';

for ($i = 0; $i < 2; $i++) {
    for ($j = 1; $j < 4; $j++) {
        if ($j == 2) {
            continue;
        }
        echo '$i=' . $i . ', $j=' . $j . '<br>';
    }
}

echo '<hr>';
for ($i = 0; $i < 2; $i++) {
    for ($j = 1; $j < 4; $j++) {
        if ($j == 2) {
            continue 2;
        }
        echo '$i=' . $i . ', $j=' . $j . '<br>';
    }
}
