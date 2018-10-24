<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/4
 * Time: 12:05
 */
/*
session的修改操作
修改session也是通过$_SESSION数组进行操作，如果数组的下标已经存在，则表示修改的意思，并且会把原来的值覆盖掉;
如果数组的下标不存在,即为创建新下标
 */
session_start();
$_SESSION['name'] = 'wangwu';