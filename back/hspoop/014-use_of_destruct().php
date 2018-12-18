<?php
header("content-type:text/html;charset=utf-8");
// 析构函数的最佳实践
/*
1. 希望在程序没有结束前, 就销毁某个对象实例
2. 及时地销毁对象创建的资源, 比如数据库链接
 */
class DAOMysql
{
    public $user_name;
    public $password;
    public $host;
    public $my_link;
    public function __construct()
    {
        $this->my_link = @mysql_connect('localhost', 'root');
    }
    public function __destruct()
    {
        @mysql_close($this->my_link);
        echo '对象被销毁<br>';
    }
}
$dao = new DAOMysql();
@mysql_select_db('db100');
$sql = 'SELECT * FROM employee';
$res = mysql_query($sql, $dao->my_link);
while ($row = mysql_fetch_assoc($res)) {
    echo '<pre>';
    var_dump($row);
}

echo '<hr>';

$dao = null;

@mysql_select_db('db100');
$sql = 'SELECT * FROM employee';
$res = @mysql_query($sql);
while ($row = @mysql_fetch_assoc($res)) {
    echo '<pre>';
    var_dump($row);
}
