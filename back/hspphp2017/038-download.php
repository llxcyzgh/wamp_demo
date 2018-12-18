<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/3
 * Time: 20:57
 */
// 确定要下载的文件 $_GET['file']
$file = isset($_GET['file'])?$_GET['file']:'';
if(!$file){
    header('refresh:3;url=38-download.html');
    echo '不知道要下载哪个文件, 返回<br>';
    exit;
}

// 读取文件的内容
$full_name = 'img\\'.$file;
$full_name = iconv('utf-8','gbk',$full_name);
$file_size = filesize($full_name);

//返回的文件
header("Content-type: application/octet-stream");
//按照字节大小返回
header("Accept-Ranges: bytes");
//显示文件大小
header("Content-Length: $file_size");
//这里客户端的弹出对话框，对应的文件名
header("Content-Disposition: attachment; filename=".$file);

$fp = fopen($full_name,'r');
// 读取该文件资源的内容
while (!feof($fp)){
    $data = fread($fp,$file_size);
    echo $data;
}
fclose($fp);