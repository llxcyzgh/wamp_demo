<?php
header("content-type:text/html;charset=utf-8");
/*
■ foreign key(外键)-基本使用
FOREIGN KEY (本表字段名) REFERENCES
主键表名 (主键名或unique字段名)

用于定义主表和从表之间的关系: 外键约束要定义在从表上，主表则必须具有主键约束或是unique约束.,当定义外键约束后，要求外键列数据必须在主表的主键列存在或是为null (学生/班级 图示) InnoDB
 */
/*
学生表(从表)                  班级表(主表)
id name class_id              id    class_name   introduce  stu_num
 */

/*
■ foreign key(外键)—细节说明
(1) 外键指向的表的字段，要求是primary key 或者是 unique
(2) 表的类型是innodb, 这样的表才支持外键
(3) 外键字段的类型要和主键/unqiue字段的类型一致(长度可以不同)
(4) 外键字段的值，必须在主键字段中出现过，或者为null
(5) 一旦建立主外键的关系，数据不能随意删除和修改了[参照完整性].
(6) 不指定外键，同样可以有不同表的字段相关联的关系，只是这种关系的维护，要由程序员自己维护(php)，mysql数据库不会去检查了！

 */
