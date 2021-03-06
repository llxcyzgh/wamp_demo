<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/7
 * Time: 16:14
 */

/*
2.1	异常介绍

	介绍:
异常指的是项目在运行的过程中，出现的一些意外情况（断电），当意外出现的时候，我们需要提供备用方案
例如：早上班长开门，如果迟到了，就属于错误；如果钥匙断了，就是异常

	语法:
针对可能出现意外的地方，我们先尝试执行，如果出现意外，我们使用备用方案
try{
    尝试执行可能出现意外的代码
	如果出现意外，在这里抛出异常信息： throw new Exception(‘异常信息’);
}catch(Exception $e){
    //捕获Exception这个类的实例
    $e->getMessage();
}

*/