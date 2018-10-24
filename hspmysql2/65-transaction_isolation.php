<?php
header("content-type:text/html;charset=utf-8");
/*
多个线程开启各自事务操作数据库中数据时，数据库系统要负责隔离操作，以保证各个线程在获取数据时的准确性。(通俗解释)

如果不考虑隔离性，可能会引发如下问题：
1. 脏读
2. 不可重复读
3. 幻读(虚读)
 */

/*
隔离级别           | 脏读 | 不可重复读 | 幻读 | 加锁读
读未提交
[read uncommitted] | yes  | yes        | yes  | 不加锁

读已提交
[read committed]   | no   | yes        | yes  | 不加锁

可重复读
[repeatable read]  | no   | no         | no   | 不加锁

可串行化
[serializable]     | no   | no         | no   | 加锁

 */
// mysql的可重复读级别中不会出现幻读,但其它数据库会出现幻读

/*
脏读（dirty read)：当一个事务读取另一个事务尚未提交的修改时，产生脏读

不可重复读（nonrepeatable read)：同一查询在同一事务中多次进行，由于其他提交事务所做的修改或删除，每次返回不同的结果集，此时发生非重复读。

幻读（phantom read)：同一查询在同一事务中多次进行，由于其他提交事务所做的插入操作，每次返回不同的结果集，此时发生幻读。

 */

/*
设置隔离级别
set session transaction isolation level read uncommitted;
set session transaction isolation level read committed;
set session transaction isolation level reapeatable read;

查询当前隔离级别
select @@tx_isolation
 */

/*
1.查看当前会话隔离级别
 select @@tx_isolation;

 2.查看系统当前隔离级别
 select @@global.tx_isolation;

 3.设置当前会话隔离级别
 set session transaction isolation level repeatable read;

 4.设置系统当前隔离级别
 set global transaction isolation level repeatable read;

5. mysql 默认的事务隔离级别是 repeatable read ,一般情况下，没有特殊要求，没有必要修改（因为该级别可以满足绝大部分项目需求）
 */

/*
修改默认隔离级别:全局修改，修改my.ini配置文件，在最后加上

#可选参数有：READ-UNCOMMITTED, READ-COMMITTED, REPEATABLE-READ, SERIALIZABLE.
[mysqld]
transaction-isolation = REPEATABLE-READ
 */

/*
在php程序中修改mysql数据库的默认事务隔离级别

connection.setTransactionIsolation(Connection.TRANSACTION_READ_COMMITTED);

 */
