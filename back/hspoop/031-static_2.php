<?php
header("content-type:text/html;charset=utf-8");
// 静态变量

/* 问题引入
有一群小孩在玩堆雪人,不时有新的小孩加入,请问如何知道现在共有多少人在玩 ?
ps: 用面向对象的思想,编写程序解决
 */

class Child
{
    public $name;
    public $age = 5;
    public static $count;
    public function __construct($name)
    {
        $this->name = $name;
    }

    // 成员方法,加入游戏
    public function jionGame()
    {
        echo $this->name . '加入游戏<br>';
        // :: 范围解析符
        self::$count++;
    }

    // 获取共有多少人玩游戏
    public function getTotalChild()
    {
        return self::$count; // 推荐使用这种 self::
        // return Child::$count;
    }
}

$child1 = new Child('贾宝玉');
$child2 = new Child('林黛玉');
$child3 = new Child('薛宝钗');
$child4 = new Child('晴雯儿');

$child1->jionGame();
$child2->jionGame();
$child3->jionGame();
$child4->jionGame();

echo '总人数是: ' . $child1->getTotalChild();
echo '总人数是: ' . $child1::$count;
$child1::$count += 100;
echo '总人数是: ' . $child::$count;

$child2->age = 10;
var_dump($child1);
var_dump($child2);
