<?php
header("content-type:text/html;charset=utf-8");
/*
要求:
1. 编写一个类 Grandfather(属性: 名字),(方法: cry(), run(),sort() );  cry可以发出声音, run可以跑, sort可以对数组进行排序(默认冒泡)

2. 编写一个类 Father(属性: 职位), 方法(cry(),run(),sort() );  cry可以发出声音, run可以跑, sort可以对数组进行排序(默认插入).  继承 Grandfather

3. 编写一个类 Son(属性: 学校), 方法(cry(),run(),sort(), working() );  cry可以发出声音, run可以跑, sort可以对数组进行排序(默认选择). 继承 father

分别创建爷爷对象,父亲对象,儿子对象,然后调用对应的方法,看看分别调用的是什么方法,体验一下重写技术
 */

class Grandfather
{
    public $name;
    public function cry()
    {
        echo '爷爷说:...';
    }
    public function run()
    {
        echo '爷爷跑...';
    }
    public function grandSort(&$arr)
    {
        echo '爷爷对数组进行冒泡排序...<br>';
        $len = count($arr);
        for ($i = 0; $i < $len - 1; $i++) {
            $flag = 0;
            for ($j = 0; $j < $len - 1 - $i; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp        = $arr[$j];
                    $arr[$j]     = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                    $flag        = 1;
                }
            }
            if (!$flag) {
                return $arr;
            }
        }
        return $arr;
    }
}

class Father extends Grandfather
{
    public $name;
    public function cry()
    {
        echo '爸爸说:...';
    }
    public function run()
    {
        echo '爸爸跑...';
    }
    public function fatherSort(&$arr)
    {
        echo '爸爸对数组进行插入排序...<br>';
        $len = count($arr);
        for ($i = 1; $i < $len; $i++) {
            $flag  = 0;
            $temp  = $arr[$i];
            $index = $i;
            for ($j = $i - 1; $j >= 0; $j--) {
                if ($temp < $arr[$j]) {
                    $flag        = 1;
                    $index       = $j;
                    $arr[$j + 1] = $arr[$j];
                }
                if (!$flag) {
                    break;
                }
            }
            $arr[$index] = $temp;
        }
        return $arr;
    }
}

class Son extends Father
{
    public $name;
    public function cry()
    {
        echo '儿子说:...';
    }
    public function run()
    {
        echo '儿子跑...';
    }
    public function sonSort(&$arr)
    {
        echo '儿子对数组进行选择排序...<br>';
        $len = count($arr);
        for ($i = 0; $i < $len - 1; $i++) {
            $min   = $arr[$i];
            $index = $i;
            for ($j = $i + 1; $j < $len; $j++) {
                if ($arr[$j] < $min) {
                    $min   = $arr[$j];
                    $index = $j;
                }
            }
            $arr[$index] = $arr[$i];
            $arr[$i]     = $min;
        }
        return $arr;
    }
}

$arr = array(5, 9, 4, 7, 8, 3);
// $arr = range(1, 10000);
// $gandfather = new Grandfather();
// $gandfather->grandSort($arr);
// $father = new Father();
// echo date('H:i:s');
// $father->fatherSort($arr);
// echo date('H:i:s');

$son = new Son();

$arr = array(5, 9, 4, 7, 8, 3, 0);
$son->sonSort($arr);
var_dump($arr);

$arr = array(5, 9, 4, 7, 8, 3, 1);
$son->fatherSort($arr);
var_dump($arr);

$arr = array(5, 9, 4, 7, 8, 3, -10);
$son->grandSort($arr);
var_dump($arr);
