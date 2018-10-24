<?php
header("content-type:text/html;charset=utf-8");
// 输出10遍 “php是世界上最好的编程语言”
$i=1;
while($i < 11){
	echo "第{$i}遍：php是世界上最好的语言<br>";
	$i++;
}