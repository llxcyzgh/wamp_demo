<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/7
 * Time: 15:42
 */

/*
自定义错误处理器，用来调试错误的，默认情况下，哪里出错，错误信息就显示在哪里，就会影响网页的布局
通过错误处理器，可以收集到错误信息，然后就可以灵活设置显示的位置

使用：set_error_handler 函数实现
一旦使用自定义错误处理器，之前error_reporting、ini_set设置的错误信息都会失效，转而采用自己的处理方式
*/


//设置自定义错误处理器
//参数：错误处理器的名字（函数）
set_error_handler("myhandler");

//定义错误处理的方式：
//参数1：错误的级别
//参数2：错误的信息
//参数3：错误发生的文件
//参数4：错误发生的行号
//说明：这些参数是当错误发生时，自动传递进来的
$err_str = '';
function myhandler($err_level, $err_mess, $err_file, $err_line)
{
    //echo '<pre>';   //2:warning    8:notice   8192:deprecated
    //var_dump($err_level,$err_mess,$err_file,$err_line);
    global $err_str;

    switch ($err_level) {
        case 2:
            $err_str .= 'Warning错误:详细信息如下:<br>' . $err_mess . '在' . $err_file . '文件的第:' . $err_line . '行';
            break;
        case 8:
            $err_str .= 'Notice错误:详细信息如下:<br>' . $err_mess . '在' . $err_file . '文件的第:' . $err_line . '行';
            break;
        case 8192:
            $err_str .= '该函数过时了:详细信息如下:<br>' . $err_mess . '在' . $err_file . '文件的第:' . $err_line . '行';
            break;
    }
}

// echo $name;
// gettype();
mysql_connect('localhost', 'root', 'root');
echo $err_str;
// getmoney();
