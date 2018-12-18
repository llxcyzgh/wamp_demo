<?php
header("content-type:text/html;charset=utf-8");
class Computer
{
    public $brand;
    public $color;
    public $cpu;
    public $memory;
    public $harddisk;
    public $price;
    public $conditions;
    public function open()
    {
        echo '打开计算机<br>';
    }
    public function close()
    {
        echo '关闭计算机<br>';
    }
    public function sleep()
    {
        echo '休眠计算机<br>';
    }
}
$computer = new Computer();
$computer->open();
$computer->close();

class Mario
{
    public $name;
    public $gender;
    public $height;
    public $color;
    public function goLeft()
    {
        echo '向左回退';
    }
    public function goRight()
    {
        echo '向右前进';
    }
    public function goJump()
    {
        echo '向上弹跳';
    }
    public function goDown()
    {
        echo '向下进水管';
    }

}
