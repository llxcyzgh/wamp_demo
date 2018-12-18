<?php
header("content-type:text/html;charset=utf-8");
// 继承不是子类从父类复制一份,而是建立一个查找的机制
// 父类
class Goods
{
    public $goods_name;
    public $price;
    public function getPrice()
    {
        return $this->price;
    }
}

// 子类
class Book extends Goods
{
    public $author;
    public $publisher;
    // public function __construct($author, $publisher)
    // {
    //     $this->author    = $author;
    //     $this->publisher = $publisher;
    // }
}

$book1             = new Book;
$book1->author     = '吴承恩';
$book1->publisher  = '清华大学出版社';
$book1->goods_name = '西游记';
$book1->price      = 57.5;

echo $book1->getPrice();
