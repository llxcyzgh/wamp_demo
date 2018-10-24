<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/7
 * Time: 16:29
 */
// 修改cookie,也是用 setcookie() ,除了cookie名字,其它都可以写[因为如果名字改了,就相当于新增了一个cookie]
setcookie('zhu_cookie','laptop',time()+100);
setcookie('j_cookie','laptop',time()+100);