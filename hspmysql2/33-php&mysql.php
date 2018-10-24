<?php
header("content-type:text/html;charset=utf-8");
// PHP对Mysql进行操作实例
//1.对mysql完成查询,得到连接
$conn = mysql_connect("localhost", "root", "root");
//选择数据
mysql_select_db("hspdb1", $conn);
//查询数据,返回结果
$res = mysql_query("select * from users", $conn);
//得到查询到多少记录
$recs = mysql_num_rows($res);
echo "共" . $recs . " 条记录<br/>";
//取出记录.
while ($row = mysql_fetch_array($res)) {
    //打印
    echo "编号:" . $row[0] . " 名称 " . $row[1] . "  邮件" . $row[2] . "<br/>";
}
//添加记录
mysql_query("insert into users (name,email)values('abc1','beijing')", $conn);
//修改
mysql_query("update  users set email='tianjing@sonhu.com' where id=4", $conn);
//删除
mysql_query("delete from users where id=4", $conn);

echo "<br/>执行ok!";
