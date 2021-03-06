<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/6
 * Time: 16:02
 */

// 制作缩略图类
class Thumbnail
{
    private $file;//原图文件
    private $thumb_path;//压缩文件保存的地址[不包括文件名,也不包括文件所在的上一级的以日期为名的目录]

    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }

    public function __construct($file,$thumb_path)
    {
        $this->file = $file;
        $this->thumb_path = $thumb_path;
    }

    /*
     * @param $area_w 要压缩后的理想宽度
     * @param $area_h 要压缩后的理想高度
     */
    public function makeThumbnail($area_w, $area_h)
    {
        $src_image = imagecreatefrompng($this->file);
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

        // 保存在本地,只需要给imagepng()函数增加第二个参数（保存地址）即可
        // 创建当日子目录
        $sub_path = date('Ymd') . '\\';
        $path = ($this->thumb_path) . $sub_path;
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        // 创建随机文件名
        // $file_name = uniqid('thumb_', true) . '.png';
        // 在原文件名上加入前缀
        $file_name = 'thumb_'.basename($this->file);
        $save_name = $path . $file_name;
        // 保存文件
        imagepng($dst_image, $save_name);

        // 返回文件完整地址        return $save_name;

    }

}