<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/7
 * Time: 14:41
 */
/*
所谓的会话，指的是客户端 和 服务器进行交互的行为

由于客户端 请求 服务器的时候，采用的是http协议，http协议是无状态的协议
我们每次请求服务器，服务器回应之后，该次请求就会消失

在脚本结束之前，把数据保存到本地的文件中，以后访问服务器时，每次都携带该文件，这就是会话技术，会话技术有2种：cookie、session

cookie 常用于识别用户。cookie 是一种服务器留在用户计算机上的小文件。每当同一台计算机通过浏览器请求页面时，这台计算机将会发送 cookie。通过 PHP，能够创建并取回 cookie 的值。
 */
/*
setcookie($name, $value, $expire) 基本参数
name
Cookie 名称。

value
Cookie 值。 这个值储存于用户的电脑里，请勿储存敏感信息。 比如 name 是 'cookiename'， 可通过 $_COOKIE['cookiename'] 获取它的值。

expire
Cookie 的过期时间。 这是个 Unix 时间戳，即 Unix 纪元以来（格林威治时间 1970 年 1 月 1 日 00:00:00）的秒数。 也就是说，基本可以用 time() 函数的结果加上希望过期的秒数。 或者也可以用 mktime()。 time()+60*60*24*30 就是设置 Cookie 30 天后过期。 如果设置成零，或者忽略参数， Cookie 会在会话结束时过期（也就是关掉浏览器时）。

path
Cookie 有效的服务器路径。 设置成 '/' 时，Cookie 对整个域名 domain 有效。 如果设置成 '/foo/'， Cookie 仅仅对 domain 中 /foo/ 目录及其子目录有效（比如 /foo/bar/）。 默认值是设置 Cookie 时的当前目录。

domain
Cookie 的有效域名/子域名。 设置成子域名（例如 'www.example.com'），会使 Cookie 对这个子域名和它的三级域名有效（例如 w2.www.example.com）。 要让 Cookie 对整个域名有效（包括它的全部子域名），只要设置成域名就可以了（这个例子里是 'example.com'）。

secure
设置这个 Cookie 是否仅仅通过安全的 HTTPS 连接传给客户端。 设置成 TRUE 时，只有安全连接存在时才会设置 Cookie。 如果是在服务器端处理这个需求，程序员需要仅仅在安全连接上发送此类 Cookie （通过 $_SERVER["HTTPS"] 判断）。

httponly
设置成 TRUE，Cookie 仅可通过 HTTP 协议访问。 这意思就是 Cookie 无法通过类似 JavaScript 这样的脚本语言访问。 要有效减少 XSS 攻击时的身份窃取行为，可建议用此设置（虽然不是所有浏览器都支持），不过这个说法经常有争议。 PHP 5.2.0 中添加。 TRUE 或 FALSE


返回值
如果在调用本函数以前就产生了输出，setcookie() 会调用失败并返回 FALSE。 如果 setcookie() 成功运行，返回 TRUE。当然，它的意思并非用户是否已接受 Cookie。


 */
