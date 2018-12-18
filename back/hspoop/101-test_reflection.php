<?php
header("content-type:text/html;charset=utf-8");

/*
练习要求:
1、使用反射机制完成Woker类的方法,如果start()方法存在,并为public就开始调用,否则提示错误
2、判断step存在并为public,就执行
3、判断stop存在并为public,就执行
4、输出Worker类的全部信息
 */

class Worker
{
    public function start($worker_name)
    {
        echo $worker_name . '开始工作... <br>';
    }

    public function step($chuli_name)
    {
        echo '开始处理: ' . $chuli_name . '<br>';
    }

    public function stop()
    {
        echo '停止工作... <br>';
    }
}

$reflect_class = new ReflectionClass('Worker');
// var_dump($reflect_class);


// 1、如果start()方法存在,并为public就开始调用,否则提示错误
if ($reflect_class->hasMethod('start') && $reflect_class->getMethod('start')->isPublic()) {
//    echo 'ok, 存在 start() 方法 <br>';
    $reflect_class->getMethod('start')->invoke($reflect_class->newInstance(), '小红');

} else {
    echo 'start() 方法不存在 或不为 public <br>';
}

// 2、判断step存在并为public,就执行
if ($reflect_class->hasMethod('step')) {
    $reflect_method_step = $reflect_class->getMethod('step');
    if ($reflect_method_step->isPublic()) {
        $reflect_method_step->invoke($reflect_class->newInstance(), '加工iphone');
    }
}

// 3、判断stop存在并为public,就执行
if ($reflect_class->hasMethod('stop')) {
    $reflect_method_stop = $reflect_class->getMethod('stop');
    if ($reflect_method_stop->isPublic()) {
        $reflect_method_stop->invoke($reflect_class->newInstance());
    }
}

// 4、输出Worker类的全部信息
echo '<pre>';
ReflectionClass::export('Worker');
