<?php
header("content-type:text/html;charset=utf-8");
/*
php程序中如何使用事务-课堂练习(课后也可以练习)

创建两张表 stu表 stu（id, 学生名,班级号） 和 班级表 cla(id,班级名, 班级人数), 学生添加3条记录，班级有一条记录.

要求，班级人数是学生的总计.
请在php中使用事务控制.
1、当添加一个学生时，班级的总人数+1(添加ok)
2、当删除一个学生时，班级的总人数-1;(删除ok)
 */
$conn = @mysql_connect('localhost', 'root');
if (!$conn) {
    die('数据库连接失败 ' . mysql_error());
}

mysql_query('set names utf8');
mysql_select_db('dbtemp');

mysql_query('START TRANSACTION');
$sql1 = "INSERT INTO stu VALUES(50,'林黛玉',102),(51,'贾宝玉',102)";
$sql2 = "UPDATE cla SET stu_num =( select total from (SELECT stu.cla_id as id,COUNT(*) as 'total' FROM stu GROUP BY stu.cla_id) b where b.id=cla.cla_id)";

$res1 = mysql_query($sql1);
$res2 = mysql_query($sql2);

if ($res1 && $res2) {
    echo '添加学生成功';
    mysql_query('commit');
} else {
    echo '添加学生失败, 开始回滚';
    mysql_query('ROLLBACK');
}

/*
sql代码
use dbtemp;

create table cla(
cla_id int unsigned primary key,
cla_name varchar(30),
stu_num tinyint unsigned
)engine=innoDB;

insert into cla values(101,'三年二班',3);

create table stu(
stu_id int unsigned primary key,
stu_name varchar(30),
cla_id int unsigned,
foreign key(cla_id) references cla(cla_id)
)engine=innoDB;

insert into stu values(1,'张三',101);
insert into stu values(2,'李四',101);
insert into stu values(3,'王五',101);

start transaction;
# set autocommit=false;
INSERT INTO stu values(4,'刘六',101);
UPDATE cla SET stu_num = (SELECT COUNT(*) FROM stu);
commit;

start transaction;
# set autocommit=false;
DELETE FROM stu where stu_id = 4;
UPDATE cla SET stu_num = (SELECT COUNT(*) FROM stu);
commit;

 */
