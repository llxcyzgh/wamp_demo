<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/7
 * Time: 16:32
 */
// 删除cookie要两个步骤

// 1. 首先修改原cookie有效期为过期 如 time()-1  过去的1秒
setcookie('j_cookie','',time()-1);
// 2. 将超全局数组$_COOKIE内的name变量删除,尽量不要直接删除整个$_COOKIE数组,因为其中可能有别的cookie
unset($_COOKIE['j_cookie']);