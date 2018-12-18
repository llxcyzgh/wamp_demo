<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/4
 * Time: 12:07
 */
/*
说明: session的删除分三种情况
(1)	删除单个session

(2) 将所有的sessoin全部删除.
作为了解即可，实际开发时，不需要谁就删除哪个session即可
思路：找到session数组中的每一个元素，分别unset掉
不要直接删除$_SESSION ----unset($_SESSION)----这个超全局数组，因为里面除了我们创建的session数据之外，还可能有其他的数据
caution:请不要使用unset($_SESSION)来释放整个$_SESSION， 因为它将会禁用通过全局$_SESSION去注册会话变量

(3) 将session文件删除和数据
session_destroy()
 */

session_start();
// 1. 删除单个session数据
//unset($_SESSION['name']);

// 2. 将所有的session全部删除
//foreach ($_SESSION as $k=>$v){
//    unset($_SESSION[$k]);
//}

// 3. 删除session文件
session_destroy();
