<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/6
 * Time: 17:16
 */
require_once '060-Thumbnail.class.php';
$myThumb = new Thumbnail('./img/1.png','./img\\');
//$myThumb->makeThumbnail(200,200);
$arr = getimagesize('./img/9989.jpeg');
var_dump($arr);

