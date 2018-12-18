<?php
header("content-type:text/html;charset=utf-8");
// 编写一个函数,传入的参数个数不确定,求和
function getSum()
{
    $val = func_num_args(); //获取参数的个数
    echo $val . '<br>';

    $val2 = func_get_args(); //返回一个包含函数参数列表的数组
    var_dump($val2);
    echo '<pre>';
    print_r($val2);

    $val3 = func_get_arg(3); // 返回参数列表的某一项 里面的值从0开始
    echo $val3 . '<br>';

}
getSum(1, 90, 89, 'hello');

function getSum2()
{
    $sum = 0;
    $arr = func_get_args();
    foreach ($arr as $v) {
        $sum += $v;
    }
    return $sum;
}

echo getSum2(1, 90, 89, 'hello');
echo getSum2(1, 90, 89);
