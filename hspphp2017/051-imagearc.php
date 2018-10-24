<?php
// imagearc — 画椭圆弧
/*
bool imagearc ( resource $image , int $cx , int $cy , int $w , int $h , int $s , int $e , int $color )

imagearc() 以 cx，cy（图像左上角为 0, 0）为中心在 image 所代表的图像中画一个椭圆弧。w 和 h 分别指定了椭圆的宽度和高度，起始和结束点以 s 和 e 参数以角度指定。0°位于三点钟位置，以顺时针方向绘画。

参数
$image     图像资源。
$cx,$cy    弧形的圆心的坐标
$w,$h      弧形的半径(宽度、高度)
$s,$e      开始的角度,结束的角度(3点钟的位置是0,起点)
$color     画笔的颜色

$style

imagefilledarc() 多一个参数 style
值可以是下列值的按位或（OR）：
1.IMG_ARC_PIE
2.IMG_ARC_CHORD
3.IMG_ARC_NOFILL
4.IMG_ARC_EDGED
IMG_ARC_PIE 和 IMG_ARC_CHORD 是互斥的；IMG_ARC_CHORD 只是用直线连接了起始和结束点，IMG_ARC_PIE 则产生圆形边界。IMG_ARC_NOFILL 指明弧或弦只有轮廓，不填充。IMG_ARC_EDGED 指明用直线将起始和结束点与中心点相连，和 IMG_ARC_NOFILL 一起使用是画饼状图轮廓的好方法（而不用填充）。
 */

// 1. 创建一个画布资源(在内存中创建一个画布)
$image = imagecreatetruecolor(500, 500);

// 2. 给画布分配颜色
$color = imagecolorallocate($image, 24, 145, 140);// 设置颜色
imagefill($image, 0, 0, $color);//填充颜色

// 3.开始绘制图像(绘制字符串,可以设置字体,大小,并让每一个字符都倾斜,而不是一整串倾斜)
$col_brush = imagecolorallocate($image,210,215,250);
//imagearc($image,250,250,200,200,0,90,$col_brush);// 描边
imagefilledarc($image,250,250,200,200,0,90,$col_brush,IMG_ARC_PIE);

// 4. 输出、还是保存[这里先输出到浏览器]
header('Content-Type:image/jpeg');
// 将图像资源输出给浏览器
imagejpeg($image);

// 5. 销毁内存中的画布资源
imagedestroy($image);