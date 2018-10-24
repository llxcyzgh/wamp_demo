<?php
header("content-type:text/html;charset=utf-8");
/*
练习:
写一个php,通过php来 添加/显示/删除/修改 学生成绩表
要求:
1、加入js前端验证和php后台验证
2、验证要求 编号、语文、数学、英语成绩是数字并且不为空,学生名字不能为空

流程提示:
1、分析程序框架图
2、设计好表和数据
3、关键技术提示(计算器)
 */

// 从html获取表单数据
$id      = $_POST['id'];
$name    = $_POST['name'];
$chinese = $_POST['chinese'];
$math    = $_POST['math'];
$english = $_POST['english'];
echo $id . ' ' . $name . ' ' . $chinese . ' ' . $math . ' ' . $english . '<br>';

// 对表单数据进行验证
if (isset($id)) {
    echo 'id不能为空';
} else {
    if (!(is_int($id))) {
        echo '';
    }

}
