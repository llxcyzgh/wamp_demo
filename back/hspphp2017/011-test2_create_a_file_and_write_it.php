<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/30
 * Time: 22:39
 */
/*
基本使用案例
2. 给存在的文件中，将原来的内容覆盖成新的内容10句 "你好，泰牛"
 */
$file_full_path = 'e:/hello.txt';
if(file_exists($file_full_path)){
    // 打开文件并覆盖原文
    if($fp = fopen($file_full_path,'w')){
        // 打开成功
        $con = '';
        for($i = 0; $i<10;$i++){
            $con.="hello, 泰牛程序员 \r\n";// \return  \new line
        }
        // 写入
        // fwriteO() — 写入文件（可安全用于二进制文件）
        // int fwrite  ( resource $handle  , string $string  [, int $length  ] )
        fwrite($fp,$con);
        // 关闭
        fclose($fp);
        echo '操作成功<br>';
    }else{
        echo '创建失败<br>';
    }
}else{
    echo '该文件不存在,无法覆盖<br>';
}