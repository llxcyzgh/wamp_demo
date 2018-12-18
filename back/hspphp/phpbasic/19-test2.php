<?php
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$op = $_POST['oper'];
//echo $op;
switch($op){
	case "+":$res = $n1 + $n2;break;
	case "-":$res = $n1 - $n2;break;
	case "*":$res = $n1 * $n2;break;
	case "/":$res = $n1 / $n2;break;
}
echo "{$n1} {$op} {$n2} = $res";
?>


