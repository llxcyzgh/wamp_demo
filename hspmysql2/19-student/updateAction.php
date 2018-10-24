<?php
header("content-type:text/html;charset=utf-8");
// 处理修改用户的请求
// echo '处理修改的请求';
// 获取修改表单

$id      = isset($_POST['id']) && is_numeric($_POST['id']) && !strpos($_POST['id'], '.') ? $_POST['id'] : 0;
$name    = empty($_POST['name']) ? '' : $_POST['name'];
$chinese = isset($_POST['chinese']) && is_numeric($_POST['chinese']) ? $_POST['chinese'] : 0;
$math    = isset($_POST['math']) && is_numeric($_POST['math']) ? $_POST['math'] : 0;
$english = isset($_POST['english']) && is_numeric($_POST['english']) ? $_POST['english'] : 0;
if (!$id || !$name || !$chinese || !$math || !$english) {
    echo '你要修改的信息不能为空';
    header('Location:err.php');
    exit;
}

// 完成修改,连接数据库
$con = @mysql_connect('localhost', 'root');
if (!$con) {
    die('错误信息' . mysql_error());
}
// 设置编码
mysql_query('set names utf8');
// 选择数据库
mysql_select_db('db_student');

$sql = "UPDATE `students` SET name='{$name}',chinese={$chinese},math={$math},english={$english} WHERE id=$id";
$sql = "UPDATE `students` SET name=\"{$name}\",chinese={$chinese},math={$math},english={$english} WHERE id=$id";
if (mysql_query($sql)) {
    header('Location:ok.php');
    exit;
} else {
    header('Location:err.php');
    exit;
}
