<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/6
 * Time: 17:16
 */
require_once '60-Thumbnail.class.php';
$myThumb = new Thumbnail('./img/2.png','./img\\');
$myThumb->makeThumbnail(200,200);


