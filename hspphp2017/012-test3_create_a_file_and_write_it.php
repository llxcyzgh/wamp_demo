<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/30
 * Time: 22:39
 */
/*
基本使用案例
3. 打开一个已经存在的文件，在原来的内容追加内容'ABC! ENGLISH!';
 */
$file_full_path = 'e:/hello.txt';
if(file_exists($file_full_path)){
    // 打开文件并追加内容
    if($fp = fopen($file_full_path,'a')){
        // 打开成功
        $con = 'ABC! ENGLISH!';
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
    echo '该文件不存在,无法追加内容<br>';
}