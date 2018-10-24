<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/6
 * Time: 9:53
 */
// 验证码在实际表单中的应用
require '54-Captcha.class.php';
$mycaptcha = new Captcha();
$mycaptcha->makeImage();