<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/28
 * Time: 16:38
 */

// 这里header就是消息头出现 Content-Type:text/html; charset=utf-8
header("Content-Type:text/html; charset=utf-8");

// 消息头出现location
//header('Location:01-abc.html');// 本地的地址
//header('Location:http://baidu.com');// 网络地址

// 消息头出现 last-modified
echo '<img src="images/qqzone.jpg" width="400px">';