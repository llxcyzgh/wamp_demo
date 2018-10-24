<?php
/**
ajax解决跨域问题
 * 跨域:非同源
 */
// 方式一: header头
//header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Origin:http://www.souhu.com");
header("Content-Type:text/html;charset=utf-8");

// 方式二: 借助 <img>  <script> 标签不受跨域影响
