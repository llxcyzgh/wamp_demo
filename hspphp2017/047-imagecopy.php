<?php
// imagecopy — 拷贝图像的一部分
/*
bool imagecopy ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h )

将 src_im 图像中坐标从 src_x，src_y  开始，宽度为 src_w，高度为 src_h 的一部分拷贝到 dst_im 图像中坐标为 dst_x 和 dst_y 的位置上。


参数
$dst_im    目标图像资源。 从 imagecreatefrompng() 创建
src_im     源图像资源。
dst_x      目标图像资源的 X 坐标。
dst_y      目标图像资源的 Y 坐标。
src_x      源图像资源的起始 X 坐标(相对于原图的左上角原点)。
src_y      源图像资源的起始 Y 坐标(相对于原图的左上角原点)。
src_w      要截取的源图像资源的 width 宽度。 原图的宽可由
src_h      要截取的源图像资源的 height 高度。

 */

// 1. 创建一个画布资源(在内存中创建一个画布)
$image = imagecreatetruecolor(500, 500);

// 2. 给画布分配颜色
$color = imagecolorallocate($image, 24, 145, 140);// 设置颜色
imagefill($image, 0, 0, $color);//填充颜色

// 3.开始绘制图像(复制图像)
$src_img = imagecreatefrompng('img/1.png');
$src_w = imagesx($src_img);
$src_h = imagesy($src_img);
imagecopy($image,$src_img,50,50,170,50,$src_w,$src_h);

// 4. 输出、还是保存[这里先输出到浏览器]
header('Content-Type:image/jpeg');
// 将图像资源输出给浏览器
imagejpeg($image);

// 5. 销毁内存中的画布资源
imagedestroy($image);