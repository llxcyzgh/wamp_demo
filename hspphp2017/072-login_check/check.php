<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/4
 * Time: 16:36
 */

$user = isset($_POST['user']) ? $_POST['user'] : '';
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';

if (!$user || !$pwd) {
    die('用户名或密码不能为空');
}

if (!($user == 'abc' && $pwd = 123)) {
    die('用户名或密码不正确');
}
session_start();
$_SESSION['account']['user'] = $user ;
$_SESSION['account']['pwd'] = $pwd ;

echo '登陆成功, 3s后跳转到首页';
header('Refresh:3;url=index.php');