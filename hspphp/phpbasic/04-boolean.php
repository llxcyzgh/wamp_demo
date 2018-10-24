<?php
// 基本数据类型之 布尔值

// 布尔值，不区分大小写(javascipt只认true)
$a = TRUE;
$b = True;
$c = true;

// 除了true和false可以当作布尔值，另外还有其它值，也可以表示真假

// 以下的值都表示false
//$d = "";
//$d = 0;
//$d = 0.0;
//$d = "0";
$d = array();
$d = null;
//$d = "null";  真
//$d = "true";  真

if($d){
	echo "真";
}else{
	echo "假";
}


