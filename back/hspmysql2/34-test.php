<?php
header("content-type:text/html;charset=utf-8");
/*
练习：写一个PHP,可以显示任意一张表的信息
要求:
编写一个php程序，显示一张表的全部信息
要求，只需要给 $sql = "select * from 表名"即可显示表的信息，表头是动态显示的。不需要指定.
提示：使用mysql_num_fields()函数和mysql_field_name()就可以搞定

mysql_num_fields(data)        取得结果集中字段的数目
data 必需。规定规定要使用的数据指针。该数据指针是 mysql_query() 函数产生的结果。

mysql_field_name(data,field_offset)          取得结果中指定字段的字段名
data 必需。要使用的数据指针。该数据指针是从 mysql_query() 返回的结果。
field_offset 必需。指示从哪个字段开始返回。0 指示第一个字段。

【20min】
 */
$conn = @mysql_connect('localhost', 'root');
if (!$conn) {
    die('未能成功连接数据库' . mysql_error());
}

mysql_query('set names utf8');
mysql_select_db('db100', $conn);
// $sql = "SELECT * FROM `mymes`";
$sql = "SELECT * FROM `emp`";
$res = mysql_query($sql);
var_dump($res);

$num = mysql_num_fields($res);
// $name = mysql_field_name($res,1);

echo "<table width='500px' border='1px'>";
// 表头部分开始
echo "<tr>";
for ($i = 0; $i < $num; $i++) {
    echo "<th>";
    echo mysql_field_name($res, $i);
    echo "</th>";
}
echo "</tr>";
// 表头部分结束
// 表格内容部分开始
// while ($row = mysql_fetch_row($res)) {
while ($row = mysql_fetch_assoc($res)) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>";
        echo $value;
        echo "</td>";
    }
    echo "</tr>";
}
// 表格内容部分结束
echo "</table>";
