<?php
//$user_list = array('peter', 'green', 'jim', 'lucy', 'lily');
//if (in_array($_POST['username'], $user_list)) {
//    echo '0用户已经存在';
//} else {
//    echo '1用户名可以使用';
//}

$name = isset($_POST['username']) ? $_POST['username'] : 'abc';

$con = @mysql_connect('localhost:3306', 'root', '');
//var_dump($con);
if (!$con) {
    die('服务器连接错误');
}
mysql_select_db('php_7');
mysql_query('set names utf8');
$sql = "SELECT name FROM user WHERE name='{$name}'";
$res = mysql_query($sql);
$num = mysql_num_rows($res);
if ($num > 0) {
    echo '\<span style="color:red">用户名已存在,请另取</span>';
} else {
    echo '\<span style="color:green">用户名可以使用</span>';

}

/*
while ($row = mysql_fetch_assoc($res)) {
    var_dump($row);
}
*/
