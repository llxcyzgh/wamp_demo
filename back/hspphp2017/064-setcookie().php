<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/7
 * Time: 14:59
 */
/*
 * Cookie 细节
 *
 * Cookie默认每个域名下最多创建20个cookie，每个cookie文件最多存储4K左右的数据，当然chrome浏览器创建的cookie更大18KB
 * setcookie前面不能有任何输出，echo 、var_dump()等,
 因为setcookie是服务器告诉浏览器的，告诉浏览器在自己身上创建cookie文件，服务器向浏览器回应信息是通过header头信息回应的; 正常的http请求时，先向浏览器发出header头信息，再输出内容，如果先echo，再发出header头信息的时候，就违反了http协议

 * Cookie 使用
1. 最近浏览的商品(访问的网页)
2. 浏览器保存用户名,密码

 */
// 设置cookie

setcookie('zhu_cookie', 'computer', time() + 100);

/*
setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);

$name, 保存的cookie变量名称

$value, 变量对应的值

$expire, cookie文件的有效期

$path, 有效路径,
 默认情况只允许访问当前目录、当前目录子目录下面(孙子级也可以)的cookie，不能访问上一级目录里面定义的cookie
我们可以通过第4个参数设置为  / ，设置cookie起作用的路径：/ 表示服务器的根目录，也就是在整个服务器的根目录下都起作用

$domin, 有效域名(cookie不支持跨域使用,可以通过该参数指定cookie在哪个域名下起作用)
例如：
php.itbull.com	在这台主机下面定义一个cookie变量，默认无法在web.itbull.com这个域名主机下面读取到，但是可以通过参数5设置
下面表示该cookie可以在itbull.com这个域名以及其子域名中都可以使用，如果不设置参数5，只能在当前域名下访问

$secure, 是否允许在https协议下使用
如果设置为true，就表示该cookie只能在https协议下进行传输

$httponly, 为了防止cookie被劫持定义的参数,只允许在http协议下传输(在web服务器下进行传输)
 */