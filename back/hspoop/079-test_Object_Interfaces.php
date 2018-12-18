<?php
header("content-type:text/html;charset=utf-8");
// 接口模拟现实中的电脑插入外部设备工作

interface iUsb
{
    // 开始工作
    public function start();
    // 停止工作
    public function stop();
}

// 手机实现接口的方法
class Phone implements iUsb
{
    public function start()
    {
        echo '手机开始工作....<br>';
    }
    public function stop()
    {
        echo '手机停止工作....<br>';
    }
}

// 相机实现接口的方法
class Camera implements iUsb
{
    public function start()
    {
        echo '相机开始工作....<br>';
    }
    public function stop()
    {
        echo '相机停止工作....<br>';
    }
}

// 写一个计算机类
class Computer
{
    public function work($iUsb)
    {
        $iUsb->start();
        echo '工作了10个小时...<br>';
        $iUsb->stop();
    }
}

// 创建手机、相机、电脑对象
$phone    = new Phone();
$camera   = new Camera();
$computer = new Computer();
$computer->work($phone);
$computer->work($camera);
