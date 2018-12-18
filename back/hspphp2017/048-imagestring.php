<?php
// imagestring — 水平地画一行字符串
/*
bool imagestring ( resource $image , int $font , int $x , int $y , string $s , int $col )

imagestring() 用 col 颜色将字符串 s 画到 image 所代表的图像的 x，y 坐标处（这是字符串左上角坐标，整幅图像的左上角为 0，0）。如果 font 是 1，2，3，4 或 5，则使用内置字体。

参数
$image  图像资源。
$font   字体大小
$x, $y  文字的 x,y 坐标
$s      绘制的字符。
$col    颜色。


 */

// 1. 创建一个画布资源(在内存中创建一个画布)
$image = imagecreatetruecolor(500, 500);

// 2. 给画布分配颜色
$color = imagecolorallocate($image, 24, 145, 140);// 设置颜色
imagefill($image, 0, 0, $color);//填充颜色

// 3.开始绘制图像(绘制字符串)
$col_brush = imagecolorallocate($image,10,15,50);
imagestring($image,25,200,250,'hello, world',$col_brush);

// 4. 输出、还是保存[这里先输出到浏览器]
header('Content-Type:image/jpeg');
// 将图像资源输出给浏览器
imagejpeg($image);

// 5. 销毁内存中的画布资源
imagedestroy($image);