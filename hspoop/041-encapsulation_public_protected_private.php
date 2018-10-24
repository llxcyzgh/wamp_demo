<?php
header("content-type:text/html;charset=utf-8");
// 封装:访问控制符
class A
{
    // 三种属性
    public $n1    = 10;
    protected $n2 = 20;
    private $n3   = 30;

    // 三种方法
    public function getN1()
    {
        return '$n1 = ' . $this->n1;
    }
    protected function getN2()
    {
        return '$n2 = ' . $this->n2;
    }
    private function getN3()
    {
        return '$n3 = ' . $this->n3;
    }

    public function getInfo()
    {
        echo 'getInfo()' . ' n1 = ' . $this->n1 . ' n2 = ' . $this->n2 . ' n3 = ' . $this->n3;
        echo '<br>';
        echo $this->getN1() . ' ' . $this->getN2() . ' ' . $this->getN3();
    }
}

$a = new A();
echo '在类的外部访问 public 共有属性 $n1 = ' . $a->n1 . '<br>';
// echo '在类的外部访问 protected 共有属性 ' . $a->n2;
// echo '在类的外部访问 private 共有属性 ' . $a->n3;
echo '在类的外部访问 public 共有方法 ' . $a->getN1() . '<br>';
// echo '在类的外部访问 protected 共有方法 ' . $a->getN2();
// echo '在类的外部访问 private 共有方法 ' . $a->getN3();

echo '<hr>';
$a->getInfo();
