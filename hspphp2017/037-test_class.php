<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/3
 * Time: 20:44
 */

// upload class 类的使用
require_once '36-Upload.class.phpss.php';
$upload = new Upload();
$path = $upload->func($_FILES['cat_logo']);
var_dump($path);