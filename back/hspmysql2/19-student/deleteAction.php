<?php
header("content-type:text/html;charset=utf-8");
// 处理删除用户的请求
// echo '处理删除的请求'
// 获取id,完成删除任务
// 如果id是通过超链接传递的,使用GET方式获取
$id = isset($_GET['id']) && is_numeric($_GET['id']) && !strpos($_GET['id'], '.') ? $_GET['id'] : 0;
if (!$id) {
    echo '你要删除的id有误';
    header('Location:err.php');
    exit;
}

// 完成删除,连接数据库
$con = @mysql_connect('localhost', 'root');
if (!$con) {
    die('错误信息' . mysql_error());
}
// 设置编码
mysql_query('set names utf8');
// 选择数据库
mysql_select_db('db_student');
$sql = "DELETE FROM `students` WHERE id=$id";
if (mysql_query($sql)) {
    header('Location:ok.php');
    exit;
} else {
    header('Location:err.php');
    exit;
}
