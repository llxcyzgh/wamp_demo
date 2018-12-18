<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/6
 * Time: 10:47
 */
/*
接收表单提交过来的数据
拿用户提交过来的验证码 和 生成的图像里面的   随机数   进行比较
思考：如何把生成的随机数保存起来  SESSION？
*/
$captcha = isset($_POST['captcha']) ? $_POST['captcha'] : '';