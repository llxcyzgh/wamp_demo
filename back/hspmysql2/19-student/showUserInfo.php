<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>修改用户信息</title>
</head>
<body>
	<h1>要修改的用户信息</h1>
<?php
// 获取要修改的用户的id
$id = isset($_GET['id']) && is_numeric($_GET['id']) && !strpos($_GET['id'], '.') ? $_GET['id'] : 0;
if (!$id) {
    echo '你要删除的id有误';
    header('Location:err.php');
    exit;
}

// 连接数据库,显示对应的用户信息
$con = @mysql_connect('localhost', 'root');
if (!$con) {
    die('错误信息' . mysql_error());
}
// 设置编码
mysql_query('set names utf8');
// 选择数据库
mysql_select_db('db_student');
$sql = "SELECT * FROM `students` WHERE id=$id";
$res = mysql_query($sql);
var_dump($res);

while ($row = mysql_fetch_assoc($res)) {
    var_dump($row);
    echo "
	<table>
	<form action='updateAction.php' method='post'>
	<tr>
	<td>id</td>
	<td><input type='text' name='id' value={$row['id']} readonly='readonly'></td>
	</tr>
	<tr>
	<td>学生名字</td>
	<td><input type='text' name='name' value={$row['name']}></td>
	</tr>
	<tr>
	<td>语文成绩</td>
	<td><input type='text' name='chinese' value={$row['chinese']}></td>
	</tr>
	<tr>
	<td>学生名字</td>
	<td><input type='text' name='math' value={$row['math']}></td>
	</tr>
	<tr>
	<td>学生名字</td>
	<td><input type='text' name='english' value={$row['english']}></td>
	</tr>

	<tr>
	<td><input type='submit' value='提交修改'></td>
	</tr>

	</form>
	</table>
";
}

?>
</body>
</html>
