<?php
// 使用函数打印金字塔（这个函数没有返回值）
function printPyramid($n){
	for($i=0;$i<$n;$i++){
		for($j=0;$j<2*$n-1;$j++){
			if($j>=$n-1-$i && $j<=$n-1+$i){
				echo '*';
			}else{
				echo '&ensp;';
			}
		}
	echo '<br>';
	}
}

printPyramid(15);