<?php
header("content-type:text/html;charset=utf-8");
// 重载(或重写)是多态的一种具体表现形式
/*
重载: 用一个标识符调用不同的函数(使用魔术方法__call)

重写: 子类可以覆盖父类的方法(或属性)
重写的条件:
(1) 子类方法的名称,参数个数及参数类型必须完成一致
(2) 子类方法的访问控制符的范围不能小于父类方法的访问控制符的范围
 */
class A
{
    public function test1($p)
    {
        echo 'test1 <pre>';
        print_r($p);
        echo '<hr>';
    }
    public function test2($p)
    {
        echo 'test2 <pre>';
        print_r($p);
        echo '<hr>';
    }
    public function __call($method, $p)
    {
        if ($method == 'jisuan') {
            if (count($p) == 1) {
                $this->test1($p);
            } elseif (count($p) == 2) {
                $this->test2($p);
            }
        }
    }
}

$a = new A();
$a->jisuan(11, 45);

echo '<hr>';

$a->jisuan(11);
