<?php
header("content-type:text/html;charset=utf-8");
// 随机生成1-1000之间的一个数,直到生成了99这个数,看看一共用了多少次?
// 方法一
$num = 0;
for ($count = 0; $num != 99; $count++) {
    $num = rand(1, 1000);
}
echo $count;
echo '<hr>';
// 方法二
$count = 0;
while (true) {
    $val = rand(1, 1000);
    $count++;
    if ($val == 99) {
        echo $count;
        break;
    }
}
