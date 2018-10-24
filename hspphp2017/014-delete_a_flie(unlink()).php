<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/31
 * Time: 20:43
 */
// 删除文件

$file_full_path = 'e:myhtllo.txt';
if(!$file_full_path){
    echo '文件不存在,无法删除<br>';
}else{
    if(unlink($file_full_path)){
        echo '删除成功<br>';// 不会出现在回收站
    }else{
        echo '删除失败<br>';
    }
}
