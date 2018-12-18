CREATE TABLE dept(/*部门表 department*/
	deptno MEDIUMINT UNSIGNED NOT NULL DEFAULT 0,/*id number*/
	dname VARCHAR(20) NOT NULL DEFAULT '',/*name*/
	loc VARCHAR(13) NOT NULL DEFAULT ''/*location*/
) ENGINE=MYISAM DEFAULT CHARSET=utf8;

INSERT INTO dept VALUES(10,'ACCOUNTING','NEW YORK'),(20,'RESEARCH','DALLAS'),(30,'SALES','CHICAGO'),(40,'OPERATIONS','BOSTON');


# 创建表EMP雇员
CREATE TABLE emp(/*employee*/
	empno MEDIUMINT UNSIGNED NOT NULL DEFAULT 0,/*编号*/
	ename VARCHAR(20) NOT NULL DEFAULT '',/*名字*/
	job VARCHAR(9) NOT NULL DEFAULT '',/*工作*/
	mgr MEDIUMINT UNSIGNED,/*上级编号*/
	hiredate DATE NOT NULL,/*入职时间*/
	sal DECIMAL(7,2) NOT NULL,/*薪水*/
	comm DECIMAL(7,2),/*红利*/
	deptno MEDIUMINT UNSIGNED NOT NULL DEFAULT 0
) ENGINE=MYISAM DEFAULT CHARSET=utf8;

INSERT INTO emp VALUES 
	(7369,'SMITH','CLERK',7902,'1980-12-17',800.00,NULL,20),
	(7499,'ALEEN','SALESMAN',7698,'1981-2-20',1600.00,300.00,30),
	(7521,'WARD','SALESMAN',7698,'1981-2-22',1250.00,500.00,30),
	(7566,'JONES','MANAGER',7839,'1981-4-2',2975.00,NULL,20),
	(7654,'MARTIN','SALESMAN',7698,'1981-9-28',1250.00,1400.00,30),
	(7698,'BLAKE','MANAGER',7839,'1981-5-1',2850.00,NULL,30),
	(7782,'CLARK','MANAGER',7839,'1981-6-9',2450.00,NULL,10),
	(7788,'SCOTT','ANALYST',7566,'1987-4-19',3000.00,NULL,20),
	(7839,'KING','PRESIDENT',NULL,'1981-11-17',5000.00,NULL,10),
	(7844,'TURNER','SALESMAN',7698,'1981-9-8',1500.00,NULL,30),
	(7900,'JAMES','CLERK',NULL,'1981-12-3',950.00,NULL,30),
	(7902,'FORD','ANALYST',NULL,'1981-12-3',3000.00,NULL,20),
	(7934,'MILLER','CLERK',NULL,'1982-1-23',1300.00,NULL,10);


# 工资级别表
CREATE TABLE salgrade
(
grade MEDIUMINT UNSIGNED NOT NULL DEFAULT 0,
losal DECIMAL(17,2)  NOT NULL,
hisal DECIMAL(17,2)  NOT NULL
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO salgrade VALUES (1,700,1200);
INSERT INTO salgrade VALUES (2,1201,1400);
INSERT INTO salgrade VALUES (3,1401,2000);
INSERT INTO salgrade VALUES (4,2001,3000);
INSERT INTO salgrade VALUES (5,3001,9999);


/*
问题:
如何显示每个部门的平均工资和最高工资?
select deptno,avg(sal),max(sal) from emp group by deptno;

如何显示每个部门的每种岗位的平均工资和最低工资?
select count(*),deptno,job,avg(sal),min(sal) from emp group by deptno,job;


如何显示平均工资低于2000的部门号和它的平均工资?
select deptno,avg(sal) from emp  group by deptno having avg(sal) < 2000;
select deptno,avg(sal) as 'myavg' from emp  group by deptno having myavg < 2000;
思路: 
1、统计各个部门的平均工资
2、对结果进行筛选【having是对group by的结果进行筛选】
*/