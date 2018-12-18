<?php
// 自定义一个计算加、减、乘、除、取模的函数
/*
 *
 */
function calcu($num1,$num2,$oper){
	$res = null;
	// 通过if...else判断运算符来决定进行怎样的操作
	if ($oper == '+'){
		$res = $num1 + $num2;
	}else if ($oper == '-'){
		$res = $num1 - $num2;
	}else if ($oper == '*'){
		$res = $num1 * $num2;
	}else if ($oper == '/'){
		$res = $num1 / $num2;
	}else if ($oper == '%'){
		$res = $num1 % $num2;
	}
	echo "$num1 $oper $num2 = $res";
	return $res;
}