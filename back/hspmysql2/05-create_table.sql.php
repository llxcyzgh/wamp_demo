<?
/*
创建表

基本语法：
create table table_name
(
	field1 datatype,
	field2 datatype,
	field3 datatype,
	...
) character set 字符集 collate 校对规则 engine 存储引擎方式
说明：
1、关键字不能省
2、field 表示字段，列的名称
3、datatype 表示列的数据类型（这里指的是 mysql数据类型，不是php数据类型）
4、chracter set 字符集，如果没有指定，则以所在数据库的字符集为准
5、collate 校对规则，如果没有指定，则以所在数据库的校对规则为准
6、engine 表示表的存储引擎

*/

/*
练习：
创建表时，要根据需要保存的数据创建相应的列（字段），并根据数据的类型定义相应的列类型。如：
user 表
	id 整型
	name 字符串
	password 字符串
	birthday 日期

CREATE TABLE user(
	id int comment 'id号',
	name varchar(60) comment '用户名',
	password char(32) comment '密码是32位的md5的值',
	birthday date comment '生日'
)character set utf8 collate utf8_general_ci engine MyISAM;

如果表的engine是 MyISAM，那么会产生三个文件：user.frm（结构） user.MYD（数据） user.MYI（索引）

如果表的engine是 InooDB，那么会产生一个文件：user2.frm（结构）,其它的数据放在上级文件夹的某个文件中
*/
