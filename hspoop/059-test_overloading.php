<?php
header("content-type:text/html;charset=utf-8");
/*
要求:
编写一具和尚类 Monk, 可以完成如下
1. 属性(名字,年龄,本领,性别)
2. 可以通过如下方式完成如下功能
2.1 $monk1->play($arr); =>传入一个数组,可以完成对数组进行排序,要求对传入的数组本身进行排序(提示信息为: xx和尚 完成了 xx任务)
2.2 $monk1->play($arr1,$arr2); =>传入两个数组,可以将数组合并后,返回新数组(提示信息为: xx和尚 完成了 xx任务)
2.3 $monk1->play($arr1,$num); =>传入一个数组和一个数,可以查询$arr1中有没有这个数,并返回该数在$arr1中的下标,如果查不到,就返回-1(提示信息为: xx和尚 完成了 xx任务)
 */
class Monk
{
    public $name;
    public $age;
    public $gender;
    public $ability;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __call($method, $args)
    {
        // echo 123;
        if ($method == 'play') {
            if (count($args) == 1) {
                if (is_array($args[0])) {
                    sort($args[0]);
                    echo $this->name . '和尚完成了排序任务';
                    return $args;
                }

            } elseif (count($args) == 2) {
                if (is_array($args[0]) && is_array($args[1])) {
                    return array_merge($args[0], $args[1]);
                } elseif (is_array($args[0]) && is_numeric($args[1])) {
                    return array_search($args[1], $args[0]) ? array_search($args[1], $args[0]) : -1;
                }
            }
        }
    }
}

$monk1 = new Monk('和尚1');
$arr1  = array(7, 9, 2, 0, 3);
$arr2  = array(5, 4, 6, 8, 1);
var_dump($monk1->play($arr1));
var_dump($monk1->play($arr1, $arr2));
echo '下标是' . $monk1->play($arr1, 9);
