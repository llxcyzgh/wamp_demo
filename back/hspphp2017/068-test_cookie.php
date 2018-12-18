<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/7
 * Time: 16:37
 */
/*
 * （1）	显示用户访问时间，如果是第一次访问服务器，显示第一次访问，时间为xxx；如果是不是第一次访问，则显示上次访问时间为xxx
思考：想要读取到上次访问这个页面时的时间，由于http协议无状态的，所以默认情况下无法读取到上次访问的任何信息，如果想获得上次访问的时间，需要把访问这个页面的时间保存起来
 */
date_default_timezone_set('PRC');
//if (isset($_COOKIE['access_time'])) {
if (array_key_exists('access_time', $_COOKIE)) {
    echo '上一次的访问时间是' . $_COOKIE['access_time'];
} else {
    echo '之前没有访问过, 本次(第一次)的访问时间是' . date('Y-m-d H:i:s');
}
setcookie('access_time', date('Y-m-d H:i:s'), time() + 60 * 60 * 24 * 365);

//setcookie('access_time', '', time()-1);
//unset($_COOKIE['access_time']);


// 以下才是正确的, setcookie 之前不能有任何输出 echo
/*
setcookie('f', time(), time() + 60 * 60 * 24 * 30);

if (isset($_COOKIE['f'])) {
    echo '上一次访问时间是: ' . date('Y-m-d H:i:s', $_COOKIE['f']);
} else {
    echo '本次访问时间是: ' . date('Y-m-d H:i:s');
}

*/
