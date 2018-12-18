<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/30
 * Time: 22:39
 */
/*
基本使用案例
1. 创建一个新文件，写入内容 10句 'hello,world'
 */
$file_full_path = 'e:/hello.txt';
if(!file_exists($file_full_path)){
    // 创建新文件
    if($fp = fopen($file_full_path,'w')){
        // 创建成功
        $con = '';
        for($i = 0; $i<10;$i++){
            $con.="hello, world \r\n";// \return  \new line
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
    echo '该文件已经存在<br>';
}