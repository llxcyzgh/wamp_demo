<?php
header("content-type:text/html;charset=utf-8");
/*
__isset()
当对不可访问属性调用 isset()  或 empty()  时，__isset() 会被调用。

__unset()
当对不可访问属性调用 unset()  时，__unset() 会被调用。

这里的"不可访问属性" 指的是:  private/protected/不存在
 */

class Cat
{
    public $name;
    protected $food;
    private $sex;
    public function __construct($name, $food, $sex)
    {
        $this->name = $name;
        $this->food = $food;
        $this->sex  = $sex;
    }
    public function __isset($pro_name)
    {
        // echo '属性名为:' . $pro_name;
        return isset($this->$pro_name);
    }

    public function __unset($pro_name)
    {
        if (isset($this->$pro_name)) {
            unset($this->$pro_name);
        } else {
            echo '***不能unset一个不存在的属性***';
        }
    }

}
$cat1 = new Cat('小花猫', '<・)))><<', '女生');

// 判断某个成员属性是否存在
echo '$cat1->name ' . isset($cat1->name) . '<br>';
echo '$cat1->namx ' . isset($cat1->namx) . '<br>';
//echo '$cat1->food ' . isset($cat1->food) . '<br>';

unset($cat1->name);
echo '<pre>';
var_dump($cat1);

echo '<br>';
//unset($cat1->food);
echo '<pre>';
var_dump($cat1);
