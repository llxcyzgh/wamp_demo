<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/5
 * Time: 12:41
 */

class IdCode
{
    private $res_image_width = 200;// 画布资源的宽
    private $res_image_height = 50;// 画布资源的高
    private $rgb_bg_color = array(30, 150, 150); // 画布资源的背景颜色rgb值
    private $rgb_fg_color = array(255, 255, 255);// 画布资源的前景颜色grb值
    private $char_num = 4;// 验证码字符的个数
    private $arr_char = array(1, 2, 3, 4, 5);// 验证码的字符范围
    private $char_angle = 30;// 验证码字符倾斜的角度
    private $char_size = 30;// 验证码字符的字体大小
    private $char_font = 'img/BryantSlim.ttf';// 验证码字符的字体类型

    // 提供set、get方法赋值、读取值
    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        return $this->$name;
    }

    // 获得大、小写字母和数字组成的数组的函数
    public function getArrChar()
    {
        $arr = array();
        for ($i = 48; $i <= 122; $i++) {
            if (($i > 57 && $i < 65) || ($i > 90 && $i < 97)) {
                continue;
            } else {
                $arr[] = chr($i);
            }
        }
        return $arr;
    }

    // 提供创建画布资源的函数
    public function createImage($width, $height)
    {
        return imagecreatetruecolor($width, $height);
    }

    // 提供创建颜色的函数(背景色,前景色)
    public function createColor($res, array $arr)
    {
        return imagecolorallocate($res, $arr[0], $arr[1], $arr[2]);
    }

    // 提供绘制完成的后续工作(输出,关闭)的函数
    function outPut($res)
    {
        header('Content-Type:image/jpeg');
        imagejpeg($res);
        imagedestroy($res);
    }

    // 执行绘制验证码
    function drawIdCode()
    {
        // 1. 创建一个画布资源
        $res_image = $this->createImage($this->res_image_width, $this->res_image_height);
        // 2. 给画布分配颜色
        $bg_color = $this->createColor($res_image, $this->rgb_bg_color);// 2.1 设置背景颜色
        imagefill($res_image, 0, 0, $bg_color);// 2.2 给画布填充背景颜色
        // 3. 开始绘制
        $this->arr_char = $this->getArrChar();// 验证码字符内容的数组[全部大小写字母和数字]
        $len = count($this->arr_char); // 验证码字符内容数组的长度
        $fg_color = $this->createColor($res_image, $this->rgb_fg_color);// 3.1 设置前景颜色
        for ($i = 0; $i < ($this->char_num); $i++) {
            $this->char_angle = rand(0, 60); // 验证码字符的角度
            $avg = $this->res_image_width / $this->char_num;
            $x = rand(0.4 * $avg, 0.6 * $avg) + $i * $avg;
            $y = rand($this->res_image_height - 5, $this->res_image_height);
            $char = $this->arr_char[rand(0, $len - 1)];
            imagettftext($res_image, $this->char_size, $this->char_angle, $x, $y, $fg_color, $this->char_font, $char);
        }
        // 4. 执行后续输出,关闭
        $this->outPut($res_image);
    }

}