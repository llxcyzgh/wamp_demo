<?php
header("content-type:text/html;charset=utf-8");
// 处理添加的请求
//1. 接收数据,需要验证
// id是整数
$id = isset($_POST['id']) && is_numeric($_POST['id']) && !strpos($_POST['id'], '.') ? $_POST['id'] : ' ';
echo $id;

// name不为空(0或''也是空)
$name = empty($_POST['name']) ? ' ' : $_POST['name'];

$chinese = isset($_POST['chinese']) && is_numeric($_POST['chinese']) ? $_POST['chinese'] : 0.0;
$math    = isset($_POST['math']) && is_numeric($_POST['math']) ? $_POST['math'] : 0.0;
$english = isset($_POST['english']) && is_numeric($_POST['english']) ? $_POST['english'] : 0.0;

// 后台验证
if ($id == '' || $name == '' || $chinese == '' || $math == '' || $english == '') {
    echo '你的数据输入有问题,请重新输入';
    header('Location:addUser.php');
    exit;
}

// 数据操作
$con = @mysql_connect('localhost', 'root');
if (!$con) {
    die('错误信息' . mysql_error());
}

// 设置编码
mysql_query('set names utf8');
// 选择数据库
mysql_select_db('db_student');
$sql = "INSERT INTO `students` VALUES($id,'$name',$chinese,$math,$english)";
if (mysql_query($sql)) {
    echo '成功';
    header("Location:ok.php");
    exit;
} else {
    echo '失败';
    header("Location:err.php");
    exit;
}

// 资源的回收和关闭,由系统自动操作
