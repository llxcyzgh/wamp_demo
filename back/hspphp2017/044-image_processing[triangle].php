<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/5
 * Time: 0:28
 */
// 画一个三角形,相当于三条直线(line)

// 1. 创建一个画布资源(在内存中创建一个画布)
$image = imagecreatetruecolor(500, 300);

// 2. 给画布分配颜色
$color = imagecolorallocate($image, 24, 145, 140);// 设置颜色

imagefill($image, 0, 0, $color);//填充颜色

// 3.开始绘制图像(绘制线条)
// 参数1: 在哪个画布资源中进行绘制
// 参数2: 起点的X轴坐标
// 参数3: 起点的Y轴坐标
// 参数4: 终点的X轴坐标
// 参数5: 终点的Y轴坐标
// 参数6: 使用什么颜色绘制线条
$white = imagecolorallocate($image, 255, 250, 250);
imageline($image, 100, 100, 100, 200, $white);
imageline($image, 100, 200, 200, 200, $white);
imageline($image, 200, 200, 100, 100, $white);

// 4. 输出、还是保存[这里先输出到浏览器]
header('Content-Type:image/jpeg');
// 将图像资源输出给浏览器
imagejpeg($image);

// 5. 销毁内存中的画布资源
imagedestroy($image);