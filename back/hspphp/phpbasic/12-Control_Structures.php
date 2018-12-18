<?php
header("content-type:text/html;charset=utf-8");
// 三大流程控制
/*1、顺序控制流程
 * 	这个是自动的， 不加任何控制的流程
 *
/*2、分支控制流程（if...eles 或 switch...break ）
 * 	所谓分支控制， 就是代码中有了判断的逻辑，根据这个判断的真假来执行不同的代码
 *
 *3、循环控制流程
 *
 *
 */
$money = 10;
if($money > 180){
	echo '你的消费大于180，直接成为高级会员';
}else{
	echo '你的消费小于等于180，不能成为高级会员';
}