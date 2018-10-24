<?php
// 字符串中输出函数  print、printf、sprintf、vprintf之间的区别

// 在php中，字符串下标是按字节来取的，utf-8中，一个汉字占3个字节
$str="abc,北京";
echo $str[0];//a
echo $str[1];//b
echo $str[2];//c
echo $str[3];//,
echo $str[4];//
echo $str[5];//
echo $str[6];//
//echo $str[7];
//echo $str[8];
//echo $str[9];

echo 1,21,'hello',"<h1>h1标题</h1>";


/*1、echo 不是一个函数，是一个字符串的结构。不能返回值，echo后面可以跟很多个参数，之间用分号隔开（这时就不能用小括号括起来了）如：
 * 		echo $myvar1;
 * 		echo 1,21,'hello',"<h1>h1标题</h1>";*
 *
 */


/*2、print
 *
 */


/*3、printf 可以格式化输出内容，有一个返回值，始终是1
 *
 */
$name='首都';
$age=5;
$address='北京';
printf("my name is %s,age %d",$name,$age);



/*4、sprintf 跟printf相似，但不打印(输出)，而是返回格式化后的文字，其它的与printf一样
 */
$num=108;
$name='宋江';
$name2='卢俊义';
$sal=100000;
$sal2=10000;
$str='<hr>梁山好汉共有 %d 个，老大是 %s ，工资是  %d ; 老二是 %s，工资是  %d 。';
$ss=sprintf($str,$num,$name,$sal,$name2,$sal2);
echo $ss;


























