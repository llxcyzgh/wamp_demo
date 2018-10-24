<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/7
 * Time: 15:21
 */
// 屏蔽错误

/*
为什么要屏蔽错误？
我们在实际开发阶段，可以把问题都显示出来，便于我们调试错误，当项目实际上线之后，如果在显示错误的话，用户体验不好，所以我们需要在网站上线的时候，将所有的错误屏蔽掉

1. 修改PHP配置文件（php.ini）
说明：一般的员工没有权限接触服务器的任何配置文件的
&符号：并且
~ 符号：忽略
E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED，就表示：
显示所有的错误，并且忽略NOTICE级别的错误，并且忽略严格模式的错误（必须使用最新版本兼容的语法）

2. error_reporting()
由于上面的方式，一般的程序员没有权限接触服务器的配置，所以我们就会通过error_reporting这个函数设置，只在当前这个脚本有效，而且不用重启apache服务器
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

3. ini_set()
可以设置任何PHP的配置项（包括error_reporting）
ini_set('error_reporting',E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);
 */