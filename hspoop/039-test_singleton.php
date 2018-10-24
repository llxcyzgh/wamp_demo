<?php
header("content-type:text/html;charset=utf-8");
class GrilFriend
{
    public $name;
    public $age;
    public $look;
    public static $instance = null;

    private function __construct($name, $age, $look)
    {
        $this->name = $name;
        $this->age  = $age;
        $this->look = $look;
    }

    public static function getSingleton($name, $age, $look)
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self($name, $age, $look);
        }
        return self::$instance;
    }

    private function __clone()
    {}

}

// $girl1 = new GrilFriend('小红', '23', 99);
// $girl2 = new GrilFriend('小丽', '20', 94);

$girl1 = GrilFriend::getSingleton('小红', '23', 99);
$girl2 = GrilFriend::getSingleton('小丽', '20', 89);

var_dump($girl1);
var_dump($girl2);

if ($girl1 === $girl2) {
    echo '$girl1 === $girl2';
} else {
    echo '$girl1 !== $girl2';
}
