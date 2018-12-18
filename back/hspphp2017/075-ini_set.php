<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/4
 * Time: 18:38
 */

// 除了通过php.ini 设置php配置项, 也可以在php文件中使用 ini_set() 函数来设置, 但是这里的设置只对当前php文件生效

//先设置session文件的存储位置
ini_set('session.save_path', 'D:/tmp');
session_start();    //session_start的时候，才会创建session文件
$_SESSION['name'] = 'zhangsan';


/*
 注意事项:
	session中可以存放什么数据类型
说明：session可以存放 string ,int,float,bool,array,object 都可以，除了资源类型
		就不一一举例演示了，大家感兴趣可以自己演示一下

	session的key的值，只能是字符串，不能是整数

 */

/*
session的存储机制

session的存储分为3个阶段：

1. session_start()开启阶段：
1.1	确定浏览器身上是否携带了session_id（session文件名称），如果携带了，就使用浏览器身上的sess_id，如果没有携带session_id，则创建session文件，并把session文件名称（作为session_id）回应给浏览器
1.2	初始化$_SESSION这个变量，先读取session文件里面的内容，再将内容反序列化之后，赋值给$_SESSION这个变量
1.3	在这个阶段还会判断哪些session文件已经过期了，然后再触发垃圾回收机制

2. 脚本运行周期内：session_start()之后
	php只是对$_SESSION这个变量进行增删改查的操作，需要注意：这个阶段并没有影响到session文件里面的内容，除非你在这个阶段session_destroy()了，除此之外，该阶段不会对session文件有任何影响

3. 脚本执行结束阶段
	在这个阶段才会对 session 文件进行扣件, 也就是这个阶段才会把 $_SESSION 数组中的数据序列化然后存储到 session 文件中
 */

/*
session 的垃圾回收机制
 */