<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/7
 * Time: 22:31
 */
$user = isset($_POST['user']) ? $_POST['user'] : '';
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';

if (!$user || !$pwd) {
    header('refresh:3; url=00-login.php');
    echo '用户名和密码不能空, 即将返回登陆页面';
    exit;
}

if ($user !='abc' || $pwd != '123') {
    header('refresh:3; url=00-login.php');
    echo '用户名和密码不正确, 即将返回登陆页面';
    exit;
}

session_start();
$_SESSION['user'] = $user;
$_SESSION['pwd'] = $pwd;

header('location:00-index.php');

