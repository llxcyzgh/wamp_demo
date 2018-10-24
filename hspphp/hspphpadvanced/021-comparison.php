<?php
header("content-type:text/html;charset=utf-8");
$a = 90;
$b = 90;
if ($a == $b) {
    echo 'ok1';
}
$b--;
if ($a > $b) {
    echo 'ok2';
}
if ($a >= $b) {
    echo 'ok3.<br>';
}

// 比较两个数的大小关系
$num1 = 8.4;
$num2 = 2.8;
if ($num1 > $num2) {
    echo '$num1 > $num2';
} else if ($num1 == $num2) {
    echo '$num1 = $num2';
} else if ($num1 < $num2) {
    echo '$num1 < $num2';
}

// 涉及到运算的变量大小比较
$num1 = 8.4 / 3;
$num2 = 2.8;
if (round($num1 * 1000000) > round($num2 * 1000000)) {
    echo '$num1 > $num2';
} else if (round($num1 * 1000000) == round($num2 * 1000000)) {
    echo '$num1 = $num2';
} else if (round($num1 * 1000000) < round($num2 * 1000000)) {
    echo '$num1 < $num2';
}

// 等于,全等于,不等,不全等
// 等于只需要值相等,不需要类型也相等; 全等需要值和类型都相等
$n1 = 4;
$n2 = 4.0;
if ($n1 == $n2) {
    echo '<br> $n1 == $n2';
} else {
    echo '<br> $n1 != $n2';
}
if ($n1 === $n2) {
    echo '<br> $n1 === $n2';
} else {
    echo "<br> $n1 !== $n2";
}
