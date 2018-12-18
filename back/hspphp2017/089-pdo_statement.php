<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/5
 * Time: 16:53
 */

/*
	说明：
获得PDOStatement对象的方法：query()、prepare()

	PDOStatement对象提供的方法：
fetch()       查询1条记录
fetchAll()    查询所有记录
fetchColumn() 查询一个字段的值

bindValue()   绑定参数（替换占位符）
execute()     执行预编译的sql语句

closeCursor() 关闭游标、指针（查询数据之后，将游标初始化，便于下次查询）
errorCode()	  获得预编译sql语句中的错误代码
errorInfo()	  获得预编译的sql语句中的错误信息
rowCount()    获得执行增删改受影响的记录数

 */