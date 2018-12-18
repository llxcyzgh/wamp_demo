<?php
/**
 * 我们之前学习过文件的上传（上传一个头像），但是上传的文件不能直接使用的，因为本地的文件可能会很大，在前端页面显示的时候，就会加载很长时间，所以我们通常会先压缩再使用
 * 通常压缩的时候，一般是按照等比例压缩，所谓的等比例压缩就是宽度、高度同时压缩相同的比例，在实际开发的时候，我们通常会根据具体的需要（前端页面的需求）在指定的范围内进行等比例压缩
 */

/*
图像压缩非常简单，就是一个php的图像处理函数：imagecopyresampled
该函数有10个参数：

dst_image   目标图象连接资源。(通常指的是画布资源)
src_image   源图象连接资源。(将该图片资源压缩之后，再保存到目的地画布中)
dst_x       目标 X 坐标点。(画布的起点坐标)
dst_y       目标 Y 坐标点。
src_x       源的 X 坐标点。(原图的起点坐标)
src_y       源的 Y 坐标点。
dst_w       目标宽度。（画布的宽度、高度）
dst_h       目标高度。
src_w       源图象的宽度。（原图的宽度、高度）[通过 imagesx() 和 imagesy() 获得 ]
src_h       源图象的高度。

返回值
成功时返回 TRUE ， 或者在失败时返回 FALSE 。
 */
// 制作缩略图、图像压缩
$dst_image = imagecreatetruecolor(100, 100);
$src_image = imagecreatefrompng('img/1.png');
$dst_x = 0;
$dst_y = 0;
$src_x = 0;
$src_y = 0;
$dst_w = 100;
$dst_h = 100;
$src_w = imagesx($src_image);
$src_h = imagesy($src_image);
imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);

// 可以保存,也可以输出到浏览器
// 1. 输出到浏览器
header("Content-Type:image/png");
imagepng($dst_image);

// 2. 保存在本地,只需要给imagepng()函数增加第二个参数（保存地址）即可
//imagepng($dst_image,'./mycompress.png');
