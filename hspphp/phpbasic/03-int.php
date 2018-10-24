<?php
// 基本数据数据类型之 int

// php可以使用各种进制来表示数
$num = 123;// 十进制
$num2 = -23;// 十进制
$num3 = 0123;// 八进制
$num4 = 0x123;// 八进制

echo $num."<hr>";// 123
echo $num2."<hr>";// -23
echo $num3."<hr>";// 3+2*8+1*8*8 = 3
echo $num4."<hr>";// 3+2*16+1*16*16 = 291

// php不支持无符号数（有正负）

// php最大整数是多少？为什么？
echo PHP_INT_MAX; // 2147483647   (21亿)
// 一个int数占四个字节，一个字节有8位，也就是一个int数有32位，最前一位是符号（正负），还有31位，大小是 2^31-1
echo "<br>";
echo PHP_INT_SIZE; // 4