<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/6
 * Time: 16:02
 */
// 制作缩略图类
function makeThumbnail($area_w, $area_h)
{
    $src_image = imagecreatefrompng('img/1.png');
    $src_w = imagesx($src_image);
    $src_h = imagesy($src_image);
    $src_x = 0;
    $src_y = 0;

    $dst_x = 0;
    $dst_y = 0;
    $scale = $src_w / $area_w >= $src_h / $area_h ? $src_w / $area_w : $src_h / $area_h;
    $dst_w = round($src_w / $scale);
    $dst_h = round($src_h / $scale);


    $dst_image = imagecreatetruecolor($dst_w, $dst_h);
    imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);

// 可以保存,也输出到浏览器
// 1. 输出到浏览器
    header("Content-Type:image/png");
    imagepng($dst_image);

// 2. 保存在本地,只需要给imagepng()函数增加第二个参数（保存地址）即可
//imagepng($dst_image,'./mycompress.png');

}

makeThumbnail(200,10000);