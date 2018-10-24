<?php
header("content-type:text/html;charset=utf-8");
// 静态变量

/* 问题引入
有一群小孩在玩堆雪人,不时有新的小孩加入,请问如何知道现在共有多少人在玩 ?
ps: 用面向对象的思想,编写程序解决
 */
$total_count = 0;
class Child
{
    public $name;
    // public $child_count;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // 成员方法,加入游戏
    public function jionGame()
    {
        echo $this->name . '加入游戏';
        // $this->child_count += 1;
        global $total_count;
        $total_count++;
    }

    // 获取共有多少人玩游戏
    public function getTotalChild()
    {
        return $this->child_count;
    }
}

$child1 = new Child('贾宝玉');
$child2 = new Child('林黛玉');
$child3 = new Child('薛宝钗');
$child1->jionGame();
$child2->jionGame();
$child3->jionGame();

echo $total_count;
