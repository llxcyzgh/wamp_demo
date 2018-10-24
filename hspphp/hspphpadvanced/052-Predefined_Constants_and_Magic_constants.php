<?php
header("content-type:text/html;charset=utf-8");
// 预定义常量和魔术常量
/*
1. 魔术常量
PHP中有八个魔术常量，它们的值会随着它们在代码中的位置的改变而改变。这些特殊的常量不区分大小写。
__LINE__ ：返回文件中的当前行号。也可写成__line__。
__FILE__：返回当前文件的绝对路径（包含文件名）。
__DIR__：返回当前文件的绝对路径（不包含文件名），等价于 dirname(__FILE__)。
__FUNCTION__：返回当前函数（或方法）的名称。
__CLASS__：返回当前的类名（包括该类的作用区域或命名空间）。
__TRAIT__：返回当前的trait名称（包括该trait的作用区域或命名空间）。
__METHOD__：返回当前的方法名（包括类名）。
__NAMESPACE__：返回当前文件的命名空间的名称。

2. 预定义常量
内核预定义常量：是在PHP的内核中就定义好了的常量。区分大小写。
PHP_VERSION：返回PHP的版本。
PHP_OS：返回执行PHP解释器的操作系统名称。
PHP_EOL：系统换行符，Windows是（\r\n），Linux是（\n），MAC是（\r）。

标准预定义常量：PHP默认定义的常量。区分大小写。
M_PI：返回圆周率π的值。

3. 预定义变量
PHP 中的许多预定义变量都是"超全局的"，这意味着它们在一个脚本的全部作用域中都可用。在函数或方法中无需执行 global $variable， 就可以访问它们。
超全局变量是在全部作用域中始终可用的内置变量。
$GLOBALS：global全局变量，是一个包含了所有全局变量的组合数组，全局变量的名称就是该组合数组的键。
$_GET：HTTP GET 变量，通过 URL 参数传递给当前脚本的变量的数组。
$_POST：HTTP POST 变量，通过 HTTP POST 方式传递给当前脚本的变量的数组。
$_COOKIE：HTTP Cookies 变量，通过 HTTP Cookies 方式传递给当前脚本的变量的数组。
$_SESSION：session 变量，当前脚本可用的 SESSION 变量的数组。
$_REQUEST：HTTP Request 变量，默认情况下包含了 $_GET，$_POST 和 $_COOKIE 的数组。
$_FILES：HTTP 文件上传变量，通过 HTTP POST 方式上传到当前脚本的项目的数组。
$_SERVER：服务器信息变量，包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等信息的数组。这个数组中的项目由 Web 服务器创建。
$_ENV：环境变量，通过环境方式传递给当前脚本的变量的数组。
以上预定义变量都是超全局变量。
以下预定义变量都是非全局的。
$php_errormsg：前一个错误信息，$php_errormsg 变量包含由 PHP 生成的最新错误信息。这个变量只在错误发生的作用域内可用，并且要求 track_errors 配置项是开启的（默认是关闭的）。
$HTTP_RAW_POST_DATA：包含 POST 提交的原始数据。
$http_response_header：HTTP 响应头，$http_response_header 数组与 get_headers() 函数类似。当使用HTTP包装器时，$http_response_header 将会被 HTTP 响应头信息填充。
$argc：传递给脚本的参数数目，包含当运行于命令行下时传递给当前脚本的参数的数目。脚本的文件名总是作为参数传递给当前脚本，因此 $argc 的最小值为 1，这个变量仅在 register_argc_argv 打开时可用。
$argv：传递给脚本的参数数组，包含当运行于命令行下时传递给当前脚本的参数的数组。第一个参数总是当前脚本的文件名，因此 $argv[0] 就是脚本文件名，这个变量仅在 register_argc_argv 打开时可用。

 */

echo __LINE__ . '<br>'; // 显示当前是第几行
echo __DIR__ . '<br>'; // 显示当前文件的路径,不包括文件名
echo __FILE__ . '<br>'; // 显示当前文件的路径,包括文件名
function funk()
{
    echo '输出函数名为: ' . __FUNCTION__;
}
funk();
