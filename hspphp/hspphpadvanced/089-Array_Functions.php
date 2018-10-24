<?php
header("content-type:text/html;charset=utf-8");
// 数组相关的函数
// count($arr)
// is_array($arr)  在多维数组的遍历时有用到
// print_r($arr) 和 var_dump()  区别是后一个不光显示数组,还可以显示数组及内部元素的数据类型
// sort() 函数用于排序
// rsort() 函数用于逆向排序
// usort() 函数用于自定义规则排序
// array_merge()    把两个或两个以上数组混合
// array_reverse()    数组反转
// array_search()    查找是否存在某个值,有两个参数,前一个是值,后一个是要进行查找的数组
// array_pop()    出栈
// array_push()    入栈

// 数组排序,字符串数组:按字母先A-Z,然后a-z,也就是首个字符对应的ascii码大小
$arr = array('apple', 'Orange', 'Ap', 'banana');
sort($arr);
echo '<pre>';
print_r($arr);

echo '<hr>';
// 数组排序,数值数组:按数值大小,由小到大
$arr = array(10, -10, 5.2, -2.5);
sort($arr);
echo '<pre>';
print_r($arr);

echo '<hr>';
// 按数组元素每个字符串的长度排序
function mySort($str1, $str2)
{
    if (strlen($str1) == strlen($str2)) {
        return 0;
    } else {
        return strlen($str1) > strlen($str2) ? 1 : -1;
    }
}
$arr = array('apple', 'Orange', 'Ap', 'banana');
usort($arr, 'mySort');
echo '<pre>';
print_r($arr);

echo '<hr>';

// array_merge()    array_reverse()    array_search()    array_pop()    array_push()
$arr1 = array(1, 40, 50, 60);
$arr2 = array(90, 30);
// $arr  = array(900, 300);
$arr3 = array_merge($arr1, $arr2); //如果输入的数组中有相同的字符串键名，则该键名后面的值将覆盖前一个值。然而，如果数组包含数字键名，后面的值将不会覆盖原来的值，而是附加到后面。
print_r($arr3);

echo '<hr>';
$arr     = array(10, 20, 30, 40, 50);
$arr_new = array_reverse($arr); // 结果需要接收,arrar_reverse()不改变原来的数组,array_merge()也不改变原来的数组
print_r($arr_new);

echo '<hr>';

$arr = array('apple', 'orange', 'apu', 'banana', '' => 'z');
// if (arrary_search('z', $arr)) {
// echo
// }
$key_index = array_search('z1', $arr);
echo $arr[$key_index];
echo $arr[''];

echo '<hr>';

$arr = array('apple', 'orange', 'apu', 'banana', '' => 'z');
$val = array_pop($arr); // 删除原数组的最后一个元素,并返回该元素的值
echo $val . '<br>';
print_r($arr);

echo '<hr>';

$arr  = array('apple', 'orange', 'apu', 'banana', '' => 'z');
$leng = array_push($arr, 'mm', array('hello', 'world')); // 在原数组最后添加一项,并返回更改后的数组的长度
echo $leng . '<br>';
print_r($arr);
