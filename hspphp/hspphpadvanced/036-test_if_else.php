<?php
header("content-type:text/html;charset=utf-8");
$rand_num = rand(1, 20);
if ($rand_num >= 1 && $rand_num < 10) {
    echo $rand_num . '今晚吃红烧肉';
} else {
    echo $rand_num . '减肥,不吃!';
}
