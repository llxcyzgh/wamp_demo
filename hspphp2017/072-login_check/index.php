<?php
session_start();
if (!(isset($_SESSION['account']['user']) && isset($_SESSION['account']['pwd']))) {
    die('用户名或密码不能为空');
}

if (!($_SESSION['account']['user'] == 'abc' && $_SESSION['account']['pwd'] == 123)) {
    die('用户名或密码不正确');
}


echo 'welcome';