<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/27
 * Time: 12:24
 */
// 浏览器向服务器请求访问网站的基本流程
/*
 * 1、浏览器输入 http://localhost/hsphttp/01-abc.html  回车
 * 2、浏览器解析主机名  localhost
 * 3.1、到本地hosts文件中查找ip和主机的对应关系  c:/windows/system32/drivers/etc/hosts
 *      如果在hosts文件中找到, 则向该ip发出请求
 * 3.2、如果在本地没有找到ip和域名的对应,就到外部DNS查询[Domain name system 域名系统]
 *      该服务器记录ip和主机的关系
 * 4、浏览器向apache服务器发出http请求(请求头)
 * 5、Apache服务器解析出主机名
 * 6、Apache解析出要访问的资源名称
 * 7、Apache从数据库中取回 01-abc.html
 * 8、Apache将解析好的文件(php+mysql=>html),返回给浏览器(响应头)
 * 9、浏览器对响应文件解析,并显示渲染
 */