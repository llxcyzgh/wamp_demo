<?php
header("content-type:text/html;charset=utf-8");
// 静态方法的重载 __callstatic()
class Test
{
    protected static function getSum($n1, $n2)
    {
        return $n1 + $n2;
    }
    protected static function getMax($n1, $n2, $n3)
    {
        return max($n1, $n2, $n3);
    }

    public static function __callstatic($method, $args)
    {
        if ($method == 'getVal') {
            if (count($args) == 2) {
                if (is_numeric($args[0]) && is_numeric($args[1])) {
                    return self::getSum($args[0], $args[1]);
                } else {
                    return '参数必须为数字';
                }
            } elseif (count($args) == 3) {
                if (is_numeric($args[0]) && is_numeric($args[1]) && is_numeric($args[2])) {
                    return self::getMax($args[0], $args[1], $args[2]);
                } else {
                    return '参数必须为数字';
                }
            }
        }
    }
}

$test = new Test();
echo Test::getVal(1, 2) . '<br>';
echo Test::getVal(1, 2, 5) . '<br>';
