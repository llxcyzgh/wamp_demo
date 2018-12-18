<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/27
 * Time: 20:38
 */
// Apache虚拟主机的配置
/*
 * 1、打开 Apache/conf/http.conf 文件
 *    打开虚拟主机配置
 *    Include conf/extra/httpd-vhosts.conf
 * 2、找到hosts文件  c:/windows/system32/drivers/etc/hosts
 *    加入 ip和主机对应关系
 *    127.0.0.1     localhost
 *    127.0.0.1     www.zjw.com
 * 3、配置Apache虚拟主机文件  http-vhosts.conf
 *    文件位置是  apache/conf/extra/http-vhosts.conf
 *    #配置 www.zjw.com 主机(域名)
 *    <VirtualHost *:80>
 *          DocumentRoot    "F:/WAMP_demo/hsphttp"
 *          ServerName    www.zjw.com
 *          #配置默认的首页页面
 *          DirectoryIndex      01-abc.html
 *     </VirtualHost>
 * 4、重启Apache
 * 5、通过域名访问
 */