<?php
header("content-type:text/html;charset=utf-8");
// __call() 魔术方法
/*
在对象中调用一个不可访问方法时，__call() 会被调用。
 */
class Monkey
{
    public $name;
    public $food;
// 构造函数
    public function __construct($name, $food)
    {
        $this->name = $name;
        $this->food = $food;
    }
// 成员函数
    public function showInfo()
    {
        echo "名字叫做: $this->name; 食物是 $this->food";
    }

/*
魔术方法:
@paraneter $method 方法名称
@paraneter $args   参数数组
 */
    public function __call($method, $args)
    {
        if ($method == 'paly') {
            echo '方法名是' . $method;
            echo '参数是<pre>';
            print_r($args);
            echo " $args[1] + $args[2] = {$this->$args[0]($args[1], $args[2])} ";
            // echo $this->$args[0]($args[1], $args[2]);
        } else {
            $this->$method(); // 调用不可访问的私有方法
        }
    }

    public function getSum($n1, $n2)
    {
        return $n1 + $n2;
    }

    protected function cry()
    {
        echo 'cringggggggggggggg';
    }
}

$monkey = new Monkey('妖猴', '小女孩');
$monkey->showInfo();
$monkey->paly('getSum', 10, 50);
$monkey->cry();
