<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/27
 * Time: 21:16
 */
/*
■  超文本传输协议(HTTP，HyperText Transfer Protocol)是互联网上应用最为广泛的一种网络协议。是工作在tcp/ip协议基础上的,所有的WWW文件都必须遵守这个标准。设计HTTP最初的目的是为了提供一种发布和接收HTML页面的方法。
■  通过httpwatch插件来抓取http请求内容。(浏览器抓包)
■  http1.0 短连接 http1.1长连接 .
■  http是TCP/IP协议的一个应用层协议,http也是我们web开发的基础.
 */

/*
 * 浏览器连上服务器后，向服务器请求某个web资源(html/js/css/img...)，称之为浏览器向服务器发送了一个HTTP请求。一个完整的HTTP请求包括如下内容：
 * 一个请求行、若干消息头、以及实体内容，
 * 其中的一些消息头和实体内容都是可选的，消息头和实体内容之间要用空行隔开。
 */

/*请求行的细节说明
* 请求行中的GET称之为请求方式，请求方式有：POST、GET、HEAD、OPTIONS、DELETE、TRACE、PUT
* 常用的有：POST、GET
* ■ GET和POST两种不同请求方式的区别
1. GET请求的数据会跟在url之后,也会出现在请求行中; POST地址栏没有变化,数据出现在消息体中[消息头和消息体之间有一个空行]

2. 传输数据的大小：HTTP协议没有对传输的数据大小进行限制，HTTP协议规范也没有对URL长度进行限制。而在实际开发中存在的限制主要有：
GET:特定浏览器和服务器对URL长度有限制，例如IE对URL长度的限制是2083字节(2K+35)。对于其他浏览器，如Netscape、FireFox等，理论上没有长度限制，其限制取决于操作系统的支持。
POST:由于不是通过URL传值，理论上数据不受限。

3. 安全性: 相对而言post提交，安全高.
4. get提交 更利于添加到我的收藏夹
5. 默认情况下，http是get请求 [表单中的method如果不填,则默认为get方式提交]
6. 如果是小数量数据，并不要求安全性，则选择get,否则post
7. 如果是一个 超链接带参数，也是 get方式提交的  <a href='abc.php?id=90'>点击</a>http://localhost/getInfo.php?username=hello&pwd=123



*
 */
