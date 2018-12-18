<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/7
 * Time: 22:31
 */

session_start();
if(!isset($_SESSION['user']) || !isset($_SESSION['pwd'])){
    echo '要求输入用户名密码才能进入';
    exit;
}

if ($_SESSION['user'] != 'abc' || $_SESSION['pwd'] != '123') {
    echo '用户名密码不正确,不能进入';
    exit;
}

echo 'welcome';

