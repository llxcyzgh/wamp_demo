<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/6
 * Time: 0:33
 */
require_once '054-Captcha.class.php';
$captcha = new Captcha();
$captcha->makeImage();