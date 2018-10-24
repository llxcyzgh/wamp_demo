<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/4/3
 * Time: 9:20
 */

namespace Admin\Controller;

use Think\Controller;

class ManagerController extends Controller
{
    public function login()
    {
//        echo '欢迎登陆admin后台管理系统';
        // 方式一:实例化一个对象
//        $obj = new \Home\Controller\UserController();
        // 方式二: 通过大A函数实例化一个对象
//        $obj = A('Home/User');// Home 区分大小写,user不区分大小写
//        $obj->showUserB();
        // 方式三:通过大R函数直接调用方法
//        R('Home/User/showUserB'); //Home 区分大小写,控制器和成员方法不区分大小写
//        $this->display();// 显示本页面的方法
//        $this->display('loginc');// 显示本控制器下的其它方法
//        $this->display('new/shownews');// 显示其它控制器下的方法
//        $this->display('Home@new/shownews');// 显示其它模块的控制器下的方法
//        $this->display('Home@new:shownews');// 显示其它模块的控制器下的方法

        $this->display();
    }

    public function loginB()
    {
        $made = '美国制造';
        if ($made == '德国制造4.0') {
            // 成功跳转语句: 默认时间是1秒
            $this->success('成功跳转', U('login'));
        } elseif ($made == '美国制造') {
            // 失败跳转语句: 默认时间是3秒
            $this->error('失败跳转', U('loginC'));
        } else {
            // 自定义跳转语句
            $this->redirect('loginD', array('id' => 100), 3, '跳转中...');
        }
    }

    function loginC()
    {
        echo 'made in USA';
    }

    function loginD()
    {
        echo 'made in PRC';
    }
}



/*
大A函数和大R函数的区别
大A函数:实例化另一个命名空间下的一个对象
大R函数:实例化另一个命名空间下的一个对象并调用成员方法

 */