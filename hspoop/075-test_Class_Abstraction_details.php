<?php
header("content-type:text/html;charset=utf-8");
/*
抽象类----最佳实践
项目经理[小白] 通过抽象类, 定下规范, 要求程序员实现抽象类中定下的各个方法, 常见的是数据库工具类 DB.class 下
[小红] MysqlDB.class
[小黑] OracleDB.class
 */
abstract class DB
{
    public $conn;
    abstract public function getConnect(array $arr = null);
    abstract public function query(array $arr = null);
}

class mysqlDB extends DB
{
    public function getConnect(array $arr = null)
    {
        echo '得到一个mysql的链接 <br>';
    }
    public function query(array $arr = null)
    {
        echo '查询mysql <br>';
    }
}

class OracleDB extends DB
{
    public function getConnect(array $arr = null)
    {
        echo '得到一个Oracle的链接 <br>';
    }
    public function query(array $arr = null)
    {
        echo '查询Oracle <br>';
    }
}

$mysqldb = new mysqlDB();
$mysqldb->getConnect(array('host' => 'localhost'));
$mysqldb->query(array('sql' => 'select * from users'));

$oracledb = new OracleDB();
$oracledb->getConnect(array('host' => 'localhost'));
$oracledb->query(array('sql' => 'select * from users'));
