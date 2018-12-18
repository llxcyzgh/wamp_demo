<?php
header("content-type:text/html;charset=utf-8");
// 访问 protected 和 private 属性的三种方式之三:
// 提供一个查询信息的函数
class Movie
{
    public $name;
    public $director;
    protected $cost;
    private $piao_fang;

    public function __construct($name, $director, $cost, $piao_fang)
    {
        $this->name      = $name;
        $this->director  = $director;
        $this->cost      = $cost;
        $this->piao_fang = $piao_fang;
    }

    //    提供一个查询信息的函数
    public function query($code)
    {
        if ($code == 123) {
            echo $this->name . ' ' . $this->director . ' ' . $this->cost . ' ' . $this->piao_fang;
        }
    }
}

$movie = new Movie('美人鱼', '周星驰', '10亿', '30亿');

$movie->query(123);
