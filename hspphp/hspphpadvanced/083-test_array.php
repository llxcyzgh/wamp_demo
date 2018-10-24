<?php
header("content-type:text/html;charset=utf-8");
// php数组是可以动态增长的

//练习:创建一个有100个元素的数组,元素的值在100~200之间(随机生成)
$arr = array(); //定义一个空数组
for ($i = 0; $i < 100; $i++) {
    // $arr[$i] = rand(100, 200);
    $arr[] = rand(100, 200); // 无需加入键值
}
echo '<pre>';
print_r($arr);
