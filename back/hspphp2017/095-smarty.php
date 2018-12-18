<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/6
 * Time: 10:21
 */

/*
Smarty是一个使用PHP写出来的模板引擎，是目前业界最著名的PHP模板引擎之一。它分离了逻辑代码和外在的内容，提供了一种易于管理和使用的方法，用来将原本与HTML代码混杂在一起PHP代码逻辑分离。
简单的讲，目的就是要使PHP程序员同前端人员分离，使程序员改变程序的逻辑内容不会影响到前端人员的页面设计，前端人员重新修改页面不会影响到程序的程序逻辑，这在多人合作的项目中显的尤为重要。
 */

date_default_timezone_set('PRC');
//加载smarty的核心类文件
require_once 'smarty/Smarty.class.php';
$smarty = new Smarty();

//告诉smarty去哪里读取配置文件
//$smarty->setConfigDir('config');
$smarty->setConfigDir('./img');
// 设置配置文件的存储地址


//定义常量
define('ROOT', 'http://www.itbull.cn');

//真实的数据
$name      = '习大大';
$true_name = '习近平';

//将真实数据分配一下，并显示即可生成编译文件
//参数1：html模板中使用的变量的名字（占位符的名字）
//参数2：真实的数据
//就会生成一个编译文件，会使用真实的数据代替模板中的占位符
$smarty->assign('name', $name);
$smarty->assign('true_name', $true_name);
$smarty->display('095-smarty_template.html');