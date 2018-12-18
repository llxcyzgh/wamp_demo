<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/5
 * Time: 8:57
 */

/*
为什么有可能对 session 存储方式进行改写
如果将来用户访问量特别大的时候，如果我们安装了负载均衡服务器，就会根据负载情况，将用户引导、分配到压力小的服务器上，但是我们的数据可能在原来的服务器上，这样就无法实现数据的共享了，所以我们要将session文件存储到其他地方（内存缓存中memcahe、数据库）

create table session(
sess_id varchar(32),
sess_cont text,
last_time int unsigned
)engine=myisam default charset=utf8;
*/

//修改配置文件，将session存储机制修改为user（自定义）
ini_set('session.save_handler', 'user');
ini_set('gc_maxlifetime', '600');


//开始自己定义session的存储
//参数1：就表示session_start的时候，怎么处理
//参数2：脚本结束的时候怎么处理
//参数3：读取session数据表中数据的函数
//参数4：向session数据表写入数据的函数
//参数5：销毁session数据表中的数据的函数
//参数6：session过期之后的处理函数
session_set_save_handler('open', 'close', 'read', 'write', 'destroy', 'gc');

register_shutdown_function('session_write_close');

session_start();

//初始化session、session_start时执行的函数
function open()
{
    //初始化数据库的链接
    $link = @mysql_connect('127.0.0.1', 'root', '');
    mysql_select_db("php_7");
    mysql_query("set names utf8");
}

//脚本结束的函数
function close()
{
    echo '脚本结束了...';
    return true;
}

//从session表读取数据的方法
//说明：客户端携带过来session_id,会自动传递到read里面
function read($sess_id)
{
    $sql = "SELECT `sess_content` FROM `session` WHERE sess_id='$sess_id'";
    $result = mysql_query($sql);
    $res = mysql_fetch_assoc($result);
    return $res['sess_content'];
}

//向session数据表写入数据的函数
//说明：当用户$_SESSION['name'] = 'lisi';这样操作的时候，就会把数据写入到session表
function write($sess_id, $sess_content)
{
    $sql = "INSERT INTO `session` VALUES('$sess_id','$sess_content',".time().")";
    return mysql_query($sql);
}

//destroy,当执行session_destroy()删除文件，现在要删除数据表中的记录
//说明：自动传递浏览器携带的session_id
function destroy($sess_id)
{
    $sql = "DELETE FROM session WHERE `sess_id` = '$sess_id'";
    return mysql_query($sql);
}

//当session_start()的时候判断哪些session文件过期了，在这里会判断哪些数据过期了
//说明：会自动把session数据的有效期传递进来
function gc($max_lifetime)
{
    $time = time() - $max_lifetime;
    $sql = "DELETE FROM `session` WHERE last_time < $time";   //35 36 37 38 39 40
    return mysql_query($sql);
}

// $_SESSION['name'] = 'zhangsan';
// echo '写入成功';
//session_destroy();
//echo '删除成功';


