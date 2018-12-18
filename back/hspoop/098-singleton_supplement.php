<?php
header("content-type:text/html;charset=utf-8");
// 单例模式补充
/*
为了让单例模式更完善, 可以在单例模式中, 增加一个修饰符 final, 这样单例模式中的类就是 final 类, 不可以被继承
 */
final class DBHelper
{
    private $conn;
    public static $instance = null;
    private function __construct()
    {
        $this->conn = @mysql_connect('localhost', 'root');
        echo '得到一个conn <br>';
    }
    public static function getSingleton()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __clone()
    {}
}
// $db1 = new DBHelper();
// $db2 = new DBHelper();
// if ($db1 === $db2) {
//     echo '一个对象 <br>';
// } elseif ($db1 == $db2) {
//     echo '两个对象 <br>';
// }
$db1 = DBHelper::getSingleton();
// $db2 = DBHelper::getSingleton();
$db2 = clone $db1;
if ($db1 === $db2) {
    echo '一个对象 <br>';
} elseif ($db1 == $db2) {
    echo '两个对象 <br>';
}
