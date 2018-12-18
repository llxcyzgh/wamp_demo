<?php
header("content-type:text/html;charset=utf-8");
/*
函数细节:
1.函数的参数列表可以是多个
2.参数列表可以是多个,并且数据类型可以是任意的类型(integer,float,string,boolean,null,source,array,object)
3.函数的命名跟自定义变量一样,首字母只能使用 _,A-Z,a-z,不能以数字开头
4.函数中定义的变量是局部的,函数外不生效
5.函数中要使用全局变量时,使用global
6.使用函数外面的$a,如果没有就会创建一个全局的$a变量
 */
function hello($val)
{
    var_dump($val);
}
hello(1);
hello(1.5);
hello('jk');

function abc()
{

}
