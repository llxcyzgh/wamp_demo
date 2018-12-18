<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/30
 * Time: 16:51
 */
/*
 * 课后练习题 ：
编写一个自己的 my_parse_ini_file() ，完成对 .ini 文件的读取
explode 分割字符串 / fgets 读取一行数据
 */
function my_parse_ini_file($dir)
{
    if (!file_exists($dir)) {
        echo '文件不存在, 无法访问<br>';
        return FALSE;
    } else {
        // 获取文件大小,php打开文件
        $fsize = filesize($dir);
        $fp = fopen($dir, 'r');
        // 读取文件为 字符串
        $con_str = fread($fp, $fsize);
        // 把字符串中的空白字符替换为'',也就是删除空白字符
        $con_str = str_replace(' ', '', $con_str);
        // 按回车换行给字符串分割成数组
        $arr_temp1 = explode("\r\n", $con_str);
        $arr_res = array();
        foreach ($arr_temp1 as $value) {
            // 把数组中的每一行按 '=' 分成索引数组的索引和值
            $arr_temp2 = explode('=', $value);
            $arr_res[$arr_temp2[0]] = $arr_temp2[1];
        }
        return $arr_res;
    }
}

$file_full_path = 'e:/config.ini';
$arr_ini = my_parse_ini_file($file_full_path);
var_dump($arr_ini);
echo '<hr>';
$arr_ini2 = parse_ini_file($file_full_path);
var_dump($arr_ini2);
