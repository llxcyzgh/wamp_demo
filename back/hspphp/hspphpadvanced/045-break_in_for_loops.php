<?php
header("content-type:text/html;charset=utf-8");
// for循环中使用break
for ($i = 0; $i < 13; $i++) {
    echo '$i= ' . $i . '<br>';
    if ($i == 10) {
        break;
    }
}
