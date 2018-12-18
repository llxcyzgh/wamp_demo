<?php
header("content-type:text/html;charset=utf-8");
/*
php的重载实现
1. 通过 $对象名->getVal(1,2) 返回两个数的和
2. 通过 $对象名->getVal(1,2,50) 返回三个数中的最大数
 */
class Bull
{
    public $name;

    public function __call($method, $args)
    {
        if ($method == 'getVal') {
            if (count($args) == 2) {
                if (is_numeric($args[0]) && is_numeric($args[1])) {
                    return $args[0] + $args[1];
                } else {
                    return '参数必须为数字';
                }
            } elseif (count($args) > 2) {
                if (is_numeric($args[0]) && is_numeric($args[1]) && is_numeric($args[2])) {
                    return max($args);
                } else {
                    return '参数必须为数字';
                }
            }
        }
    }
}

$bull = new Bull;
echo '两数之和: ' . $bull->getVal(1, '2y0') . '<br>';
echo '三数最大值: ' . $bull->getVal(1, 200, '504yg0') . '<br>';
