<?php
header("content-type:text/html;charset=utf-8");
$money = 100000;
for ($count = 0; $money > 50000; $count++) {
    $money = $money * (1 - 0.05);
}
for (; $money > 5000; $count++) {
    $money -= 5000;
}
echo "100000 元钱可以经过路口 {$count} 次";

echo '<hr>';
// 第二种做法
$money = 100000;
$count = 0;
while (true) {
    if ($money > 50000) {
        $money = $money * (1 - 0.05);
        $count++;
    } else if ($money >= 5000) {
        $money -= 5000;
        $count++;
    } else {
        echo "100000 元钱可以经过路口 {$count} 次";
        break;
    }
}
