<?php
header("content-type:text/html;charset=utf-8");
// 访问 protected 和 private 属性的三种方式之二: 给每一个成员变量一对 getXxx() 和 setXxx()
/*
方法二的优缺点
优点:
缺点: 代码量多
 */
// getXxx()   setXxx()

class Book
{
    public $book_name;
    public $author;
    public $price;
    private $amount = 0;

    public function __construct($book_name, $author, $price)
    {
        $this->book_name = $book_name;
        $this->author = $author;
        $this->price = $price;
    }

    // 针对$amount 提供方法
    public function setAmount($num)
    {
        if (is_int($num)) {
            $this->amount = $num;
        } else {
            echo '<br>***** 销量必须为一个整数 *****<br><br>';
        }
    }

    public function getAmount($code)
    {
        if ($code == 123) {
            return $this->amount;
        } else {
            echo '<br>*****验证码不正确,不能获取销量*****<br><br>';
        }
    }

}

$book1 = new Book('红楼梦', '曹雪芹', 56.7);

$book1->setAmount(502.2);

echo $book1->book_name . ' 的销量是: ' . $book1->getAmount(123);
