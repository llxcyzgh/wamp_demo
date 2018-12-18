<?php
header("content-type:text/html;charset=utf-8");
// 单例模式
class DBHelper
{
    private $conn;
    public static $instance = null;

    private function __construct()
    {
        $this->conn = @mysql_connect('localhost', 'root');
    }

    public static function getSingleton()
    {
        if (!self::$instance) {
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

// $db1 = new DBHelper();
// $db2 = new DBHelper();

$db3 = DBHelper::getSingleton();
$db4 = DBHelper::getSingleton();
$db5 = clone $db3;

// var_dump($db1);
// var_dump($db2);
var_dump($db3);
var_dump($db4);
var_dump($db5);

if ($db3 === $db5) {
    echo '$db1===$db2';
} else {
    echo '$db1 不全等于 $db2';
}
