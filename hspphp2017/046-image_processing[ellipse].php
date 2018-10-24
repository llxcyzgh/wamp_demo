<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/5
 * Time: 0:28
 */
// 画一个椭圆[ellipse]
/*
bool imageellipse ( resource $image , int $cx , int $cy , int $width , int $height , int $color )
在指定的坐标上画一个椭圆。

参数
image   由图象创建函数(例如imagecreatetruecolor())返回的图象资源。
cx      中间的 X 坐标。
cy      中间的 Y 坐标。
width   椭圆的宽度。
height  椭圆的高度。
color   椭圆的颜色。颜色标识符由 imagecolorallocate() 创建。

如果要画正圆,那么 宽高一样即可
 */

// 1. 创建一个画布资源(在内存中创建一个画布)
$image = imagecreatetruecolor(500, 500);

// 2. 给画布分配颜色
$color = imagecolorallocate($image, 24, 145, 140);// 设置颜色

imagefill($image, 0, 0, $color);//填充颜色

// 3.开始绘制图像(绘制椭圆)
$white = imagecolorallocate($image, 255, 250, 250);
imageellipse($image, 250, 250, 300, 300, $white);// 描边
//imagefilledellipse($image, 250, 250, 250, 500, $white);// 填充


// 4. 输出、还是保存[这里先输出到浏览器]
header('Content-Type:image/jpeg');
// 将图像资源输出给浏览器
imagejpeg($image);

// 5. 销毁内存中的画布资源
imagedestroy($image);