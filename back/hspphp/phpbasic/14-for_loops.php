<?php
header("content-type:text/html;charset=utf-8");
// 输出10遍 “php是世界上最好的编程语言”
for($i = 0;$i < 10;$i++){
	echo "第{$i}遍: php是世界上最好的编程语言<br>";
}

for($i = 0,$j = 10;$i < $j;$i++){
	echo "hello,world {$i}<br>";
	$j--;
}