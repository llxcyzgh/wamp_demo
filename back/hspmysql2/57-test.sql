/*
设学校环境如下:一个系有若干个专业，每个专业一年只招一个班，每个班有若干个学生。
现要建立关于系、学生、班级的数据库，关系模式为：
班CLASS （班号classid，专业名subject，系名deptname，入学年份enrolltime，人数num）
学生STUDENT （学号studentid，姓名name，年龄age，班号classid）
系 DEPARTMENT （系号departmentid，系名deptname）
试用SQL语言完成以下功能：
1 建表，在定义中要求声明：
    （1）每个表的主外码。
    （2）deptname是唯一约束。
    （3）学生姓名不能为空。

做：
use dbtemp;
#创建CLASS表
create table CLASS(
classid smallint unsigned primary key,
subject varchar(30),
deptname varchar(30),
enrolltime year,
num smallint unsigned,
foreign key(deptname) references DEPARTMENT(deptname)
)engine=innodb charset=utf8;

#创建STUDENT表
create table STUDENT(
studentid smallint unsigned primary key,
name varchar(30) not null,
age tinyint unsigned,
classid smallint unsigned,
foreign key(classid) references CLASS(classid)
)engine=innodb charset=utf8;

#创建DEPARTMENT表
create table DEPARTMENT(
departmentid tinyint(3) unsigned ZEROFILL primary key,
deptname varchar(30) unique
)engine=innodb charset=utf8;


2 插入如下数据
   DEPARTMENT（ 001，  数学； 
                002，  计算机；
                003，  化学； 
                004，  中文；
                005，  经济；）

insert into DEPARTMENT values(001,'数学'),(002,'计算机'),(003,'化学'),(004,'中文'),(005,'经济');

insert into department values('001','数学');
insert into department values('002','计算机');
insert into department values('003','化学');
insert into department values('004','中文');
insert into department values('005','经济');

   CLASS（
    101，软件，计算机，1995，20；    
    102，微电子，计算机，1996，30；
    111，无机化学，化学，1995，29；  
    112，高分子化学，化学，1996，25；
    121，统计数学，数学，1995，20；  
    131，现代语言，中文，1996，20；
    141，国际贸易，经济，1997，30；  
    142，国际金融，经济，1996，14；
    ）
insert into class values(101,'软件','计算机',1995,20);
insert into class values(102,'微电子','计算机',1996,30);
insert into class values(111,'无机化学','化学',1995,29);
insert into class values(112,'高分子化学','化学',1996,25);
insert into class values(121,'统计数学','数学',1995,20);
insert into class values(131,'现代语言','中文',1996,20);
insert into class values(141,'国际贸易','经济',1997,30);
insert into class values(142,'国际金融','经济',1996,14);

   STUDENT （
    8101，张三，18，101；    
    8102，钱四，16，121；
    8103，王玲，17，131；    
    8105，李飞，19，102；
    8109，赵四，18，141；    
    8110，李可，20，142;
    8201，张飞，18，111；
    8302，周瑜，16，112；
    8203，王亮，17，111；    
    8305，董庆，19，102；
    8409，赵龙，18，101；    
    8510，李丽，20，142 ）
insert into student values(8101,'张三',18,101);
insert into student values(8102,'钱四',16,121);
insert into student values(8103,'王玲',17,131);
insert into student values(8105,'李飞',19,102);
insert into student values(8109,'赵四',18,141);
insert into student values(8110,'李可',20,142);
insert into student values(8201,'张飞',18,111);
insert into student values(8302,'周瑜',16,112);
insert into student values(8203,'王亮',17,111);
insert into student values(8305,'董庆',19,102);
insert into student values(8409,'赵龙',18,101);
insert into student values(8510,'李丽',20,142);

3 完成以下查询功能
（1）找出所有姓李的学生。
select * from student where name like '李%';

（2）列出所有开设超过两个专业的系的名字。
select deptname,count(*) as '专业个数' from class group by deptname having count(*)>1;
select deptname,count(*) as '专业个数' from class group by deptname having 专业个数>1;

（3）列出人数大于等于30的系的编号和名字。
select c.deptname,sum(num),departmentid from class c,department d  where c.deptname=d.deptname  group by deptname having sum(num)>=30;

4 学校又新增加了一个物理系，编号为006。
insert into department values(006,'物理');

5 学生张三退学，请更新相关的表。 
delete from student where name='张三';
*/
