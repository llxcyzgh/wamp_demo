<?php
header("content-type:text/html;charset=utf-8");
// 取出mysql时间戳,并按照正确格式显示
// 设置时区
date_default_timezone_set('PRC');

$conn = @mysql_connect('localhost', 'root');
if (!$conn) {
    die('未能连接数据库<br>' . mysql_error());
}
mysql_query('set names utf8');
mysql_select_db('db100');

$sql = "SELECT * FROM `mymes`";
$res = mysql_query($sql);
var_dump($res);

echo '<table width="300px" border="1px">
<tr>
<td>id</td>
<td>内容</td>
<td>发表时间</td>
</tr>';

while ($row = mysql_fetch_assoc($res)) {
    echo '<tr>';
    echo '<td>';
    echo $row['id'];
    echo '</td>';
    echo '<td>';
    echo $row['content'];
    echo '</td>';
    echo '<td>';
    echo date("Y-m-d H:i:s", $row['send_time']);
    echo '</td>';
    echo '</tr>';
}
echo '</table>';
