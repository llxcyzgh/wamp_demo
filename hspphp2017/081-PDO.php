<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/5
 * Time: 10:54
 */

/*
 PDO为我们访问数据库提供了轻量级、一致性的接口，也就是说通过PDO不仅可以访问mysql数据库，还能访问其他类型的数据库：oracle、mssql等，便于数据库的移植、迁移

PDO扩展给我们提供了3个类，分别是：PDO、PDOStatement、PDOException

PDO类连接数据库，并对数据库进行增删改查操作

*/
//phpinfo();
//exit;

//通过PDO类实例化PDO对象
//参数1：数据源
//参数2：用户名
//参数3：密码
$dsn = "mysql:host=127.0.0.1;dbname=php_7;port=3306;charset=utf8";// 分号之后不要有空格
$user = 'root';
$pass = '';
$pdo = new PDO($dsn, $user, $pass);

//增加一条记录：
//$sql = "INSERT INTO user VALUES(NULL,'admin','admin123')";
//$row = $pdo->exec($sql);//返回受影响的记录条数
//var_dump($row);

//修改一条记录
//$sql = "UPDATE user SET name='zhangsan' WHERE id=1";
//$row = $pdo->exec($sql);
//var_dump($row);
//exec()   execute执行     CEO首席执行官：chief  execute  officer

//删除记录
//$sql = "DELETE FROM user";
//$result = $pdo->exec($sql);
//var_dump($result);


// 自己写 修改和删除 一条记录

//$sql = "UPDATE user SET name='myy' WHERE id=1";
//$row = $pdo->exec($sql);//返回受影响的记录条数
//var_dump($row);

$sql = "DELETE FROM user WHERE id=1";
$row = $pdo->exec($sql);//返回受影响的记录条数
var_dump($row);