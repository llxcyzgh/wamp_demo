<?php
header("content-type:text/html;charset=utf-8");
/*
字符串的基本使用
1、char(size)
固定长度字符串，最大255个字符

2、varchar(size)
可变长度字符串，最大65532字节【utf-8编码最大24844字符，1-3个字节用于记录大小】

char 和 varchar 的区别
(1)、char(4) 这个4表示字符数（绝对字符，最大255），不是字节数，不管是中文还是字母都是放4个，按字符计算
(2)、varchar(4) 这个4表示字符数，不管是字母还是中文都以定义的表的编码来存放数据
(3)、char(4)是定长，也就是，插入'aa'，也会占用分配的4个字符
(4)、varchar(4)是变长，就是，如果插入了'aa'，实际占用空间大小是 L+1 个字节 【注：同char相比，varchar值保存时，只保存需要的字符数，另加一个字节来记录长度（如果列声明的长度超过255，则使用2个字节）】
(5)、什么时候使用char，什么时候使用varchar
.   如果数据是定长，推荐使用char，比如md5的密码，邮编，手机号码，身份证号码等
.    如果一个字段的长度是不确定的，使用varchar，比如留言，文章等

查询速度 char > varchar
(6)、char会对字符串最后的空格进行删除，varchar则不会 'aaa ' -> 'aaa'
(7)、在存放大量文本时，也可以使用text类型，可以将text视为varchar列，但 text不能有默认值
create table text(name text not null);
XXX create table text(name text not null default '');

 */
