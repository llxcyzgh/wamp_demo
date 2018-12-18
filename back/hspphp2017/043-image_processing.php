<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/5
 * Time: 0:28
 */
/*
1.1图像处理基本介绍
所谓的PHP图像处理技术，就是通过php的函数进行绘制图像，然后可以输出到浏览器，也可以保存到本地

该绘图技术，需要开启php的一个扩展：GD2，该扩展提供了很多绘制图像的方法

PHP的图像处理技术的应用场景：
验证码（在图像上面绘制一些文字，人类很容易辨别出来，但是计算机脚本以目前的技术辨别图像中的字符是有很大的难度）
图像的压缩（；例如上传头像时，本地的图片很大，但是上传到服务器之后，会针对大图进行压缩处理）

1.2	PHP绘图坐标体系: 左上角为坐标原点

1.3	PHP绘图的基本步骤
1.3.1 先开启php的gd扩展，该扩展里面提供了很多绘图函数 extension=php_gd2.dll
1.3.2 开始绘制图像
1.3.2.1	 先在内存中，创建图像资源（理解成画布）：imagecreatetruecolor()
1.3.2.2	 给画布分配颜色（默认画布的颜色是真空的黑色）:imagecolorallocate()
1.3.2.3  给画笔分配颜色	：imagecolorallocate()
1.3.2.4  开始绘制			：imageline()
1.3.2.5  直接在浏览器输出、保存到本地：header()   imagepng()
1.3.2.6  销毁画布资源		：imagedestroy()


 */
//echo phpinfo();// 显示php.ini配置

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
$red = imagecolorallocate($image, 255, 0, 0);
imageline($image, 0, 0, 100, 100, $red);

// 4. 输出、还是保存[这里先输出到浏览器]
header('Content-Type:image/png');
// 将图像资源输出给浏览器
imagepng($image);

// 5. 销毁内存中的画布资源
imagedestroy($image);