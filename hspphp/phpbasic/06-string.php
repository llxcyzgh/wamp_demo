<?php
//header("content-type:text/html;charset=uft-8");// 防止中文显示乱码
header("Content-Type:text/html;charset=utf-8");
// 字符串
/*一个字符串，就是由一系列的字符组成，因此：
 * 一个字母						占一个字节
 * 一个数字						占一个字节
 * 一个汉字（gb2312/gbk）			占两个字节
 * 一个汉字（utf-8）				占三个字节
 */

/*字符串的细节说明：字符串的常见定义方法（四种）
 * 单引号
 * 双引号
 * heredoc语法结构
 * nowdoc语法结构（自php5.3.0以后）
 */
$a = 10;
// 对于单引号而言，如果含有变量，字符串不会解析显示这个变量
$str = 'abc,hello $a';
echo $str."<hr>";
// 对于单引号而言，如果含有变量，字符串会解析显示这个变量
$str2 = "abc,hello $a $str";
echo $str2."<hr>";

// 加强，如果我们在双引号中带的变量，如果相对复杂，请使用 {$变量}
$str3 = "abc,hello {$a} {$str} {$str2}";
echo $str3."<hr>";

// heredoc使用字符串方式 html代码
/*使用注意
 * 1、<<<固定 STR名 可以变化，一般来说就是全部大写字母
 * 2、标识符 STR 后不能带任何内容，包括空格
 * 3、结束的标识符 STR 前面不能有任何内容，包括空格
 * 4、heredoc 可以解析变量，类似双引号
 */

$str4 = <<<STR
hello,world!heredoc {$a}*2 中国
百度
STR;
echo $str4."<hr>";

// nowdoc类似于单引号，不会对变量进行解析
$str5 = <<<'EOD'
Example of string
spanning multiple lines
using nowdoc syntax. 你好
EOD;

echo '<hr>'.$str5;

