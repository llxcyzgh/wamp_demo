<?php
header("content-type:text/html;charset=utf-8");
// 单例模式  方法2
class DBHelper
{
    private $conn;
    public static $instance;

    private function __construct()
    {
        $this->conn = @mysql_connect('localhost', 'root');
    }

    public static function getSingleton()
    {
        // instanceof 用于确定一个 PHP 变量是否属于某一类 class 的实例：
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

// 禁止克隆的做法是 把 __clone() 设置为 private
    private function __clone()
    {
        // return false;
    }

}

$db3 = DBHelper::getSingleton();
$db4 = DBHelper::getSingleton();
$db5 = clone $db3;

var_dump($db3);
var_dump($db4);
var_dump($db5);

if ($db3 === $db5) {
    echo '$db3===$db3';
} else {
    echo '$db3 不全等于 $db4';
}
