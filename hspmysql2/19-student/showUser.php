<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>管理用户界面</title>
</head>
<body>
	<h1>管理用户界面</h1>
<?php
$con = @mysql_connect('localhost', 'root');
if (!$con) {
    die('错误信息' . mysql_error());
}
// 设置编码
mysql_query('set names utf8');
// 选择数据库
mysql_select_db('db_student');
$sql = "SELECT * FROM `students`";
// 查询数据库,获取到 $res 结果集,可以将其视为一个表
$res = mysql_query($sql);
var_dump($res);

echo "<table border='1px' width='600px'>";
echo "<tr><td>id</td><td>学生姓名</td><td>语文成绩</td><td>数学成绩</td><td>英语成绩</td><td>操作</td></tr>";
while ($row = mysql_fetch_assoc($res)) {
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['chinese']}</td><td>{$row['math']}</td><td>{$row['english']}</td><td><a href='showUserInfo.php?id={$row['id']}'>修改用户</a> <a href='deleteAction.php?id={$row['id']}'>删除用户</a></td></tr>";
}
echo "</table>";
?>
</body>
</html>
