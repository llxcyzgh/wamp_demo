<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/4
 * Time: 17:10
 */

$mycaptcha = isset($_POST['captcha']) ? $_POST['captcha'] : '';
if (!$mycaptcha) {
    die('验证码不能为空');
}

session_start();
//var_dump($_SESSION['captcha']);
if ($mycaptcha !== $_SESSION['captcha']) {
    die('验证码不正确');
}

header("Location:index.php");

