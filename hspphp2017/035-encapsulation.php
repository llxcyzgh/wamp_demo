<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/3
 * Time: 16:59
 */
// 把文件上传封装成一个类
/*
 * 为什么要封装到函数中？
提高上传文件的代码的重用性，保证这些代码能够在不同的场景中灵活的应用
封装到函数之前，先思考哪些部分将来可能会变化、修改，将这些可能变化的部分以参数形式传递进去，这样，我们的函数更加灵活

 * 为什么要将上面的代码封装类中呢？
因为现在主流的编程思想都是OOP（面向对象编程），那么面向对象编程和面向过程编程的区别是：
面向过程：文件里面的基本单位是函数
面向对象：文件里面基本的单位是类

如何封装到类中？
类包括：成员属性、成员方法
成员属性和变量的联系是：都是用来存储数据的
成员属性和变量的区别是：属性有家，变量没有家

既然他们都是用来保存数据的，那么如果一个数据从脚本开始到结束，都不会变化的话，我们就没有必要将其保存，反过来，属性只保存哪些将来可能变化的数据回到文件上传类中：
通过分析，发现上传的文件保存的路径、限制的大小、文件名的前缀、允许的文件类型等这些数据将来可能变化，所以我们将其保存到属性中

 */
// 调用
upload($_FILES['user_file']);

function upload(array $arr_file_info){
// 1. 获取从表单中上传的文件信息,另存为数组 $arr_file_info
    if (!$arr_file_info) {
        header('refresh:10;url=30-file_onload.html');
        echo '文件上传失败, 请重新上传<br>';
    }

// 2. 限制上传的文件大小
    $max = 200 * 1024; // 200kb
    if ($arr_file_info['size'] > $max) {
        header('refresh:3;url=30-file_onload.html');
        echo '上传文件大小不能超过 1M, 请重新上传<br>';
        exit;
    }

// 3. 限制文件类型
    $allow_type = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');
// 3.1 初步用$_FILE 的type 来判断[这里的type是从文件上传的后缀名而得来,有风险]
    $file_type = $arr_file_info['type'];
//if(false === array_search($file_type,$allow_type)){
    if (!in_array($file_type, $allow_type)) {
        header('refresh:3;url=30-file_onload.html');
        echo '上传文件类型不支持, 请重新上传<br>';
        exit;
    }
// 3.2 深度过滤文件类型(防止js等文件改名为.jpg而蒙混过关),也就是不依赖$_FILE 的type而获取文件类型,而是对文件作检测
    $finfo = new Finfo(FILEINFO_MIME_TYPE);
    $file_type = $finfo->file($arr_file_info['tmp_name']);
    if (!in_array($file_type, $allow_type)) {
        header('refresh:3;url=30-file_onload.html');
        echo '上传文件类型不支持, 请重新上传 [文件后缀可能得到篡改]<br>';
        exit;
    }

    /*
    in_array — 检查数组中是否存在某个值
    bool in_array  ( mixed  $needle  , array $haystack  [, bool $strict  = FALSE    ] )

    array_search — 在数组中搜索给定的值，如果成功则返回相应的键名
    mixed  array_search  ( mixed  $needle  , array $haystack  [, bool $strict  = false  ] )
     */


// 4. 按日期新建分目录
    $dir = 'uploads\\';// 本来就创建好的根目录
    $dir .= date('Ymd') . '\\';// 按日期创建子目录
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

// 5. 根据文件名后缀, 新建唯一文件名
    $houzui = strchr($arr_file_info['name'], '.');
    $des = $dir . uniqid('tn_', true) . $houzui;

// 6. 保存在指定目录
    if (move_uploaded_file($arr_file_info['tmp_name'], $des)) {
        echo '文件上传成功<br>';
    } else {
        echo '文件上传失败<br>';
    }
}