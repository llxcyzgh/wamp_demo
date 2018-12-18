<?php
header("content-type:text/html;charset=utf-8");
/*
练习：
1、这是一个ecshop的数据库，包括ecshop所有的表，请导入到mysql数据库中
2、将ecshop整个数据库备份到你的 f:盘 ecshop.bak
3、将ecshop的表 ecs_goods 备份到 f:盘 ecshop.goods.bak
4、将mysql的:盘 ecshop 数据库删除，并通过备份的 :盘 ecshop.bak恢复
5、删除刚刚恢复的 ecshop 库中的 ecs_goods表，然后使用备份的 ecshop.goods.bak 来恢复
6、使用php把 ecs_goods 表中的商品名数据取出显示到网页
 */

$conn = @mysql_connect('localhost', 'root', '');
echo $conn;
mysql_select_db('ecshop');
$sql = 'select * from ecs_goods';
$res = mysql_query($sql);
var_dump($res);

echo '
	<table border="1px">
	<tr>
	<th>
	商品名
	</th>
	</tr>
';

while ($row = mysql_fetch_assoc($res)) {
    // var_dump($row);
    echo '<tr><td>';
    echo $row['goods_name'];
    echo '</td></tr>';
}
echo '</table>';
// $arr = mysql_fetch_row($conn);
