<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/5
 * Time: 17:27
 */

namespace framework\dao;

use framework\dao\I_DAO;
use \PDO;
use \PDOException;

// 首先,类要实现、完成接口规定的内容
class DAOPDO implements I_DAO
{
    // 三私一公 来生成一个单例模式的类[私有静态$pdo属性+私有构造、克隆方法+公有静态getSingleton方法]
    // 私有的属性,将以后实例化的对象保存到该属性上[唯一性]
    private static $daopdo;
    private $pdo;

    // 私有的构造方法,参数就是数据库的连接信息
    private function __construct($option)
    {
        $host = isset($option['host']) ? $option['host'] : '';
        $user = isset($option['user']) ? $option['user'] : '';
        $password = isset($option['password']) ? $option['password'] : '';
        $dbname = isset($option['dbname']) ? $option['dbname'] : '';
        $port = isset($option['port']) ? $option['port'] : '';
        $charset = isset($option['charset']) ? $option['charset'] : '';

        // 对传入的连接信息[$option]进行数据验证
        if (!$host || !$user || !$dbname || !$port || !$charset) {
            die('数据库主机、用户名、密码、数据库名称、端口号、字符集 不能为空!');
        }

        $dsn = "mysql:host={$host};dbname={$dbname};port={$port};charset={$charset}";

        // 在构造方法中,初始化操作(连接数据库)
        try {
            $this->pdo = new PDO($dsn, $user, $password);
        } catch (PDOException $err) {
            echo $err->getMessage();
            exit;
        }
    }

    // 私有的克隆方法
    private function __clone()
    {
    }

    // 提供一个公共的静态方法生成对象
    public static function getSingleton($option)
    {
        // 如何生成的单例的对象(只生成一个对象),先判断$daopdo属性是否是当前类的实例,如果不是,就new一个;如果是,则直接返回
        if (!(self::$daopdo instanceof self)) {
            self::$daopdo = new self($option);
        }
        return self::$daopdo;
    }

    // 查询一条记录的方法
    public function fetchRow($sql)
    {
        $pdo_statement = $this->pdo->query($sql);
        if ($pdo_statement === false) {
            $error = $this->pdo->errorInfo();
            $err_str = "SQL语句有误,详细信息如下:<br>" . $error[2];
            echo $err_str;
            return false;
        }
        $res = $pdo_statement->fetch(PDO::FETCH_ASSOC);
        $pdo_statement->closeCursor();
        return $res;
    }

    // 查询所有记录的方法
    public function fetchAll($sql)
    {
        $pdo_statement = $this->pdo->query($sql);
        if ($pdo_statement === false) {
            $error = $this->pdo->errorInfo();
            $err_str = "SQL语句有误,详细信息如下:<br>" . $error[2];
            echo $err_str;
            return false;
        }
        $res = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
        $pdo_statement->closeCursor();
        return $res;
    }

    // 查询一个字段的值
    public function fetchColumn($sql)
    {
        $pdo_statement = $this->pdo->query($sql);
        if ($pdo_statement === false) {
            $error = $this->pdo->errorInfo();
            $err_str = "SQL语句有误,详细信息如下:<br>" . $error[2];
            echo $err_str;
            return false;
        }
        $res = $pdo_statement->fetchColumn();
        $pdo_statement->closeCursor();
        return $res;
    }

    // 执行增删改的操作
    public function exec($sql)
    {
        $res = $this->pdo->exec($sql);
        if ($res === false) {
            $error = $this->pdo->errorInfo();
            $err_str = "SQL语句有误,详细信息如下:<br>" . $error[2];
            echo $err_str;
        }
        return $res;
    }

    // 引号转义并包裹的方法
    public function quote($str)
    {
        return $this->pdo->quote($str);
    }

    // 查询最新插入的单条数据的主键
    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }
}

/*
$option = array(
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'dbname' => 'php_7',
    'port' => '3306',
    'charset' => 'utf8'
);
$dao = DAOPDO::getSingleton($option);

$sql = "INSERT INTO user VALUES (NULL,'abc','123')";

$dao->exec($sql);
$id = $dao->lastInsertId();
echo $id;

$str = "hello '1 or 1=1' world!";
$new_str = $dao->quote($str);
var_dump($new_str);

*/