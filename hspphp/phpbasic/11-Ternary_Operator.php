<?php
// 三元运算符，也叫三目运算符，或条件运算符
// 基本形式      表达式(expr1)?(expr2)：(expr3)
// 运算规则： 在expr1求值为true时，值为expr2，在expr1求值为false时，值为expr3

$a = 1==1?45:89;
echo $a;// 45
