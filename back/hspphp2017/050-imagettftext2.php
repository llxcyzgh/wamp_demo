<?php
// imagettftext — 用 TrueType 字体向图像写入文本
/*
array imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text  )

imagestring() 用 col 颜色将字符串 s 画到 image 所代表的图像的 x，y 坐标处（这是字符串左上角坐标，整幅图像的左上角为 0，0）。如果 font 是 1，2，3，4 或 5，则使用内置字体。

参数
$image      图像资源
$size       字体大小
$angle      字体倾斜的角度
$x          文字的 x 坐标
$y          文字的 y 坐标
$color      文字的颜色
$fontfile   字体文件
$text       绘制的文本
 */

// 1. 创建一个画布资源(在内存中创建一个画布)
$image = imagecreatetruecolor(200, 50);

// 2. 给画布分配颜色
$color = imagecolorallocate($image, 24, 145, 140);// 设置颜色
imagefill($image, 0, 0, $color);//填充颜色

// 3.开始绘制图像(绘制字符串,可以设置字体,大小,并让每一个字符都倾斜,而不是一整串倾斜)
$col_brush = imagecolorallocate($image, 210, 215, 250);
imagettftext($image, 35, 0, 25, 25, $col_brush, 'img/BryantSlim.ttf', 'a');
imagettftext($image, 35, 25, 65, 30, $col_brush, 'img/BryantSlim.ttf', 'b');
imagettftext($image, 35, 75, 105, 50, $col_brush, 'img/BryantSlim.ttf', 'c');
imagettftext($image, 35, 25, 150, 45, $col_brush, 'img/BryantSlim.ttf', 'd');

// 4. 输出、还是保存[这里先输出到浏览器]
header('Content-Type:image/jpeg');
// 将图像资源输出给浏览器
imagejpeg($image);

// 5. 销毁内存中的画布资源
imagedestroy($image);