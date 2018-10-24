<?php
// 函数输出九九乘法表
function multiple($n){
	for($i=1;$i<$n+1;$i++){
		for($j=1;$j<$i+1;$j++){
			$res=$j*$i;
		echo "{$j} × {$i} = {$res} &emsp;";
		if($i==3&&$j==2||$i==4&&$j==2){
			echo "&ensp;";
		}
		}
		echo '<br>';
	}
}
multiple(9);