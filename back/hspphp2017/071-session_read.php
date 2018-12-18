<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/4
 * Time: 11:51
 */

//session_start()
session_start();

//读取session文件的数据
var_dump($_SESSION['name']);