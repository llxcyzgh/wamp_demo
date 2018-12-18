<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/4
 * Time: 17:22
 */
session_start();
require_once '54-Captcha.class.php';
$my = new Captcha();
$captcha = $my->makeImage();

$_SESSION['captcha'] = $captcha;
//var_dump($_SESSION['captcha']);