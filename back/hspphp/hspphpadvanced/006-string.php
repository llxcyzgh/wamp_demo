<?php
header("content-type:text/html;charset=utf-8");
//字符串的使用细节

//字符串的使用方法有4种
/*1.单引号使用
特点:(1)不会去解析 (2)执行效率高*/
$num    = 10;
$addres = '北京市昌平区府学路 {$num} 号';
echo '<pre>';
var_dump($addres);

/*2.双引号使用
特点:(1)会解析 (2)执行效率没有''高 (3)如果要在""中解析含有特殊字符或者数组,则需要用{}括起来*/
$addres2 = "北京市昌平区府学路 {$num} 号";
echo '<pre>';
var_dump($addres2);

$arr       = array('no1' => '西游记', 'no2' => '红楼梦');
$book_list = "书名是: {$arr['no1']}";
echo '<pre>';
var_dump($book_list);

/*3.heredoc使用,类似双引号的使用
作用:一般用于返回大段的html代码
注意事项:(1)会解析 $ (2)<<<标识符后面的HTMLCON可以任意,一般大写 (3)<<<HTMLCON后面不要其它字符 (4)<<<HYMLCON和后面的定界标识符HTMLCON相等  (5)最后的HTMLCON顶格写
 */
$div_info = <<<HTMLCON
<h1>hello,world</h1> $num
<h1>hello,world</h1> $num
<h1>hello,world</h1> $num
<h1>hello,world</h1> $num
HTMLCON;
echo $div_info;
echo '<hr>';
/*2.nowdoc使用,类似单引号的使用
特点:(1)会解析 (2)执行效率没有''高 (3)
 */
$info = <<<'HTMLCON'
<h1>hello,world</h1> $num
<h1>hello,world</h1> $num
<h1>hello,world</h1> $num
<h1>hello,world</h1> $num
HTMLCON;
echo $info;

echo '<hr>';
//关于字符串转义使用的说明
// 如果在""中,使用\x40  16进制的值,对应的ascii字符
// \101  表示输出8进制的值,对应的ascii字符
// \x40 = 0 + 4*16 = 64
// \101 = 1 + 0*8 + 1*8*8 = 65
$str  = "abc\"\x40\101";
$str2 = "abc\"\64\65";
echo $str;
echo '<br>';
echo $str2;

echo '<br>';
$dollor  = "\x24"; // 转义的16进制数前要加一个x
$dollor2 = "\44"; // 转义的8进制数直接放到转义符后面即可
echo $dollor;
echo $dollor2 . '<br>';

$U  = "\x55";
$U2 = "\125";
echo $U;
echo $U2 . '<br>';

$b  = "\x62";
$b2 = "\142";
echo $b;
echo $b2 . '<br>';
