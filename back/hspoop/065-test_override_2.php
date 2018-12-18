<?php
header("content-type:text/html;charset=utf-8");
// 重写细节之(4): 如果父类的方法的参数使用了类型约束，还必须保证数据类型一致

class A
{
    public function getSum(array $n1, array $n2)
    {
        echo '合并两个数组<br>';
    }
}

class B extends A
{
    public function getSum(array $n1, array $n2)
    // public function getSum($n1, $n2)
    {
        echo '求出两个数的和';
    }
}

// 报错
// Strict standards: Declaration of B::getSum() should be compatible with A::getSum(array $n1, array $n2)

// 重写细节(五): (5)    子类方法不能缩小父类方法的访问权限; 但可以等于或放大权限; 父类如果是private ,则子类不会有重写的问题
class Animal
{
    protected function cry()
    {
        echo '动物叫唤';
    }
}

class Cat extends Animal
{
    //Fatal error: Access level to Cat::cry() must be public (as in class Animal)
    public function cry()
    {
        echo '小猫喵喵叫~';
    }
}
$cat1 = new Cat();
$cat1->cry();
