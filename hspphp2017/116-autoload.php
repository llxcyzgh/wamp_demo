<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/9
 * Time: 18:41
 */
// 注册一个自动加载
// 参数就是当触发自动加载机制时,调用的回调函数,并且会把需要的类名传递到该函数中
spl_autoload_register("autoloader");
function autoloader($class_name)
{
    echo '需要: ' . $class_name;
}

//$obj = new Obj();
//$res = ABCD::getSingleton();
//class C2 extends C1{}

class MyPdo implements I_DAO
{

}