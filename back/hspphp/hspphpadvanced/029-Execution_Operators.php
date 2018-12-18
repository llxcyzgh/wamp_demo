<?php
// header("content-type:text/html;charset=utf-8");
header("content-type:text/html;charset=gbk");
// 执行运算符,要注意系统的跨平台问题
echo '<pre>';
//echo `netstat -anb`;
echo '<hr>';
echo `ipconfig -all`; // linux下是 `ifconfig`
