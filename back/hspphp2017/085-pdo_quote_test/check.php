<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/5
 * Time: 14:43
 */

$user = isset($_POST['user']) ? $_POST['user'] : '';
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';

echo $user . ' *** ' . $pwd . '<br>';

if (!($user && $pwd)) {
    die('用户名或密码不能为空');
}

$dsn = "mysql:host=localhost;dbname=php_7;port=3306;charset=utf8";
$u = 'root';
$p = '';
$pdo = new PDO($dsn, $u, $p);

// 给POST的值进行过滤,防止sql注入
$user = $pdo->quote($user);
$psw = $pdo->quote($user);

echo $user . ' *** ' . $pwd . '<br>';


//$sql = "SELECT `password` FROM `user` WHERE `name`='$user'";
$sql = "SELECT `password` FROM `user` WHERE `name`=$user";
//$sql = "SELECT `password` FROM `user` WHERE `name`='$user' AND `password`='$pwd'";
//$sql = "SELECT `password` FROM `user` WHERE `name`='zhu' or 1=1 or '";
$pdo_stat = $pdo->query($sql);
$res = $pdo_stat->fetch(PDO::FETCH_ASSOC);

if (!$res) {
    die('用户不存在');// 输入的user名不存在
}

if ($res['password'] != $pwd) {
    die('用户名或密码不正确');// 输入的password不正确
}

echo 'welcome!!';