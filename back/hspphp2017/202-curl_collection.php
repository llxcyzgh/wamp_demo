<?php
// 采集：https://www.zhihu.com/search?type=content&q=java 里面的问题的标题、以及问题的回复

// 1.传统方式一:
$url          = 'https://www.zhihu.com/search?type=content&q=java';
$page_content = file_get_contents($url);
//var_dump($page_content);
//echo $page_content;

// 1.使用curl方式二:
require_once "201-HttpRequest.class.php";
$http         = new HttpRequest();
$http->url    = 'https://www.zhihu.com/search?type=content&q=java';
$page_content = $http->send();


// 2.开始过滤[分别过滤问题和答案]
$reg1 = '/<a\starget[^>]+><span[^>]+>(.+)<\/span><\/a>/U';// 定义规则
preg_match_all($reg1, $page_content, $match1);

//$reg2 = '/<div\sclass=\"RichContent-inner\"\s\sdata-reactid=[^>]+><span[^>]+>(.+)<\/span>/U';// 定义规则
$reg2 = '/<div\sclass=\"RichContent-inner\"\sdata-reactid=[^>]+><span[^>]+>(.+)<\/span>/U';// 定义规则
preg_match_all($reg2, $page_content, $match2);

// 2.在一个规则中实现两个过滤
$reg = '/<div\sclass=\"List-item\".+><div\sclass=\"ContentItem.+>.+<span\sclass=\"Highlight.+>(.+)<\/span>.+<span\sclass=\"RichText.+>(.+)<\/span>/U';
//$reg = '/<span\sclass=\"Highlight.+>(.+)<\/span>.+<span\sclass=\"RichText.+>(.+)<\/span>/U';
preg_match_all($reg, $page_content, $match);


//var_dump($match1);
//var_dump($match2);
var_dump($match);