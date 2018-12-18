<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/5
 * Time: 23:26
 */

class Captcha
{
// 成员属性
    private $width = 100; // 画布的宽度
    private $height = 40; // 画布的高度
    private $number = 4; // 验证码的字符个数
    private $font_file = 'img/BryantSlim.ttf'; // 验证码的字体文件
    private $font_size = 20; // 验证码的字体大小

    public function __set($p, $v)
    {
        if (property_exists($this, $p)) {
            $this->$p = $v;
        }
    }

    public function __get($p)
    {
        if (property_exists($this, $p)) {
            return $this->$p;
        }
    }

    // 开始绘制验证码
    public function makeImage()
    {
        // 1. 创建画布,背景颜色随机产生,颜色比较浅
        $image = imagecreatetruecolor($this->width, $this->height);
        // 2. 分配颜色
        $color = imagecolorallocate($image, mt_rand(100, 255), mt_rand(100, 255), mt_rand(100, 255));
        imagefill($image, 0, 0, $color);
        // 3. 绘制100个干扰像素点
        for ($i = 0; $i < 100; $i++) {
            $color = imagecolorallocate($image, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
            imagesetpixel($image, mt_rand(0, $this->width), mt_rand(0, $this->height), $color);
        }
        // 4. 绘制10条干扰直线
        for ($i = 0; $i < 10; $i++) {
            $color = imagecolorallocate($image, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
            imageline($image, mt_rand(0, $this->width), mt_rand(0, $this->height),mt_rand(0, $this->width), mt_rand(0, $this->height), $color);
        }

        // 5. 绘制字符串到画布中
        $code = $this->makeCode();
        $len = strlen($code);
        for ($i = 0; $i < $len; $i++) {
            $color = imagecolorallocate($image, mt_rand(0, 150), mt_rand(0, 150), mt_rand(0, 150));
            $x = $this->width / $this->number / 3 + $i * $this->width / $this->number;
            $y = $this->height * 3 / 4;
            imagettftext($image, $this->font_size, mt_rand(-30, 30), $x, $y, $color, $this->font_file, $code[$i]);// 每个字符rgb不同的彩色
//            imagettftext($image, $this->font_size, mt_rand(-30, 30), $x, $y, mt_rand(0, 100), $this->font_file, $code[$i]);// 每个字的rgb相同的灰色
        }

        // 6. 输出到浏览器
        header("Content-Type:image/png");
        imagepng($image);
        // 7. 销毁图像资源
        imagedestroy($image);
    }

    // 生成随机字符
    public function makeCode()
    {
        $upper = range('A', 'Z');
        $lower = range('a', 'z');
        $number = range(3, 9);// 0,1,2 都容易与字母中的o,l,z 混淆, 所以不选择
        $code = array_merge($upper, $lower, $number);
        shuffle($code);// 打乱数组顺序(shuffle这个函数是引用传递,返回值是bool)
        $str = '';// 根据指定的字符个数,创建字符串
        for ($i = 0; $i < $this->number; $i++) {
            $str .= $code[$i];
        }
        return $str;
    }


}