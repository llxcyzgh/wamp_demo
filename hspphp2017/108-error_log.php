<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/7
 * Time: 15:42
 */

/*
通过上面的方法可以屏蔽掉错误，但是项目在实际运行时，如果出错了，我们也无法获取，所以我们就可以将错误信息偷偷保存到日志文件中，我们只需要分析日志文件即可


ini_set()打开错误日志功能,设置日志文件最大存储字符,设置日志存储路径

ini_set('display_errors','off);// 屏蔽所有错误

ini_set('log_errors','on');
ini_set('log_errors_max_len',1024);//日志文件最大存储字符
ini_set('error_log','D:tbwamp/php/errors.txt');
 */