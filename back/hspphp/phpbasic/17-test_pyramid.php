<?php
header("content-type:text/html;charset=utf-8");
// 接收html表单中用户提交的层数
$cs = $_POST['cengshu'];
//echo $cs;
// $n表示层数，打印金字塔
$n = $cs;


// 1、半个金字塔
for($i = 0;$i < $n;$i++){
	for($j = 0;$j < $i + 1;$j++){
		echo '*';
	}
	echo '<br>';
}
echo '<hr>';

// 2、中文完整金字塔
for($i = 0;$i < $n;$i++){
	for($j = 0;$j < 2*$n - 1;$j++){
		if($j < $n - 1 - $i || $j > $n - 1 + $i){
			echo '&emsp;';// 中文空格（全角空格，占2个字符）
		}else{
			echo '日';
		}
	}
	echo '<br>';
}
echo '<hr>';

// 3、英文完整金字塔
for($i = 0;$i < $n;$i++){
	for($j = 0;$j < 2*$n - 1;$j++){
		if($j < $n - 1 - $i || $j > $n - 1 + $i){
			echo '&ensp;';// 英文文空格（半角空格，占2个字符）
		}else{
			echo '*';
		}
	}
	echo '<br>';
}
echo '<hr>';

// 4、空心英文完整金字塔
for($i = 0;$i < $n;$i++){
	for($j = 0;$j < 2 * $n - 1;$j++){
		if($i <> $n - 1 &&($j == $n -1 - $i || $j == $n -1 +$i)){
			echo '*';
		}else if($i == $n -1 && ($j >= $n -1 - $i || $j <= $n -1 +$i)){
			echo '*';
		}else{
			echo '&ensp;';
		}
	}
	echo '<br>';
}

// 4、空心菱形
// 4.1 空心菱形的上部分（不包括中线）
for($i = 0;$i < $n - 1;$i++){
	for($j = 0;$j < 2 * $n - 1;$j++){
		if($j == $n - 1 - $i || $j == $n - 1 + $i){
			echo '*';
		}else{
			echo '&ensp;';
		}
	}
	echo '<br>';
}
// 4.1 空心菱形的下部分（包括中线）
for($i = $n - 1;$i < 2 * $n - 1;$i++){
	for($j = 0;$j < 2 * $n - 1;$j++){
		if($j == $i -$n + 1 || $j == 2*$n-2-($i-($n-1))){
			echo '*';
		}else{
			echo '&ensp;';
		}
	}
	echo '<br>';
}



















