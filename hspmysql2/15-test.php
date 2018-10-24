<?php
header("content-type:text/html;charset=utf-8");
/*
创建一个员工表，选用适当的数据类型，添加2条数据，然后通过php在网页中显示

字段            属性
id              整型
name            字符型
sex             枚举类型
birthday        日期型（date）
entry_date      日期型（date）
job             字符型
salary          小数型
resume          文本型
 */

/*
create table employee(
id int unsigned not null default 0 comment 'id号',
name varchar(50) not null comment '员工名字',
sex enum('男','女') not null comment '性别',
birthday date not null comment '出生日期',
entry_date date not null comment '入职时间',
job varchar(50) not null default '' comment '职位',
salary decimal(10,2) not null default 0.0 comment '薪水',
resume text
) charset=utf8 engine=myisam;

insert into `employee` values(001,'王五',2,'1988-10-18','2016-5-19','工程师',8000.88,'毕业于XX大学');
insert into `employee` values(002,'赵六',2,'1990-10-18','2016-8-9','建筑经理',10001.88,'毕业于XX大学XX学院');

insert into `employee` values(003,'钱多多',2,'1990-10-18','2016-8-9','PHP工程师',10000,'毕业于泰牛程序员');

 */
$conn = @mysql_connect('localhost', 'root');
if (!$conn) {
    // 如果不能连接,则提示错误信息
    die('错误信息' . mysql_error());
}
mysql_query('set names utf8');
mysql_select_db('db20');

$sql = 'select * from employee';
$sql = 'select id,name,salary from employee';
$res = mysql_query($sql);

echo '<table border="1px">';

echo '<tr>';

// 打印出表头
while ($field = mysql_fetch_field($res)) {
    echo '<td>';
    // mysql_fetch_field($res) 结果是一个标准类的对象
    // var_dump($field);
    echo $field->name;
    $arr[] = $field->name;
    echo '</td>';
}

echo '</tr>';

// var_dump($arr);

while ($row = mysql_fetch_assoc($res)) {
    echo '<tr>';
    // mysql_fetch_assoc($res) 结果是一个数组
    // var_dump($row);
    // var_dump($arr);

    foreach ($arr as $val) {
        echo '<td>';
        echo $row[$val];
        echo '</td>';
    }

    echo '</tr>';
}

echo '</table>';

// 如果不释放资源和关闭连接,那么在页面执行完毕后,系统会自动执行这两项功能
// 释放资源
mysql_free_result($res);
// 关闭连接
mysql_close($conn);
