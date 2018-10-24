<?php
header("content-type:text/html;charset=utf-8");
// 经典的 thinkphp 控制器调试的实现机制

/*
问题:
1、IndexAction 中的方法和访问控制符是不确定的. 如果是public, 可以执行
2、如果存在 _before_index 方法, 并且是 public的, 执行该方法
3、再判断是否存在 _after_index 方法, 并且是 public的, 执行该方法
 */

class IndexAction
{
    public function index()
    {
        echo 'index <br>';
    }
    public function test($year = 2016, $month = 10, $day = 10)
    {
        echo $year . '-------' . $month . '-------' . $day . '<br>';
    }

// 注意: 这个 _before_index() 方法 可能有,也可能没有
    public function _before_index()
    {
        echo __FUNCTION__ . '<br>';
    }

// 注意: 这个 _after_index() 方法 可能有,也可能没有
    public function _after_index()
    {
        echo __FUNCTION__ . '<br>';
    }
}

// 反射实现
$reflect_class = new ReflectionClass('IndexAction');

if ($reflect_class->hasMethod('index')) {
    echo '存在该函数 index <br>';
    // 得到这个反射函数
    $reflect_method = $reflect_class->getMethod('index');
    if ($reflect_method->isPublic()) {
        echo 'index 是 public 的 <br>';

        // 判断是否存在前置 _before_index 方法
        if ($reflect_class->hasMethod('_before_index')) {
            // 获取方法
            $reflect_method_before = $reflect_class->getMethod('_before_index');
            if ($reflect_method_before->isPublic()) {
                // 执行 _before_index
                $reflect_method_before->invoke($reflect_class->newInstance());
            }
        }

        // 调用 test 方法
        $reflect_class->getMethod('test')->invoke($reflect_class->newInstance());

        // 判断后置方法_after_index是否存在
        if ($reflect_class->hasMethod('_after_index')) {
            $reflect_method_after = $reflect_class->getMethod('_after_index');
            if ($reflect_method_after->isPublic()) {
                $reflect_method_after->invoke($reflect_class->newInstance());
            }
        }

    }
} else {
    echo '不存在该函数 <br>';
}
