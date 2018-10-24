<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/5
 * Time: 15:57
 */
// 使用自己写的idcode() 验证码类类,实例化一个对象
require_once '052-IdCode.class.php';
$idcode = new IdCode();
$idcode->drawIdCode();