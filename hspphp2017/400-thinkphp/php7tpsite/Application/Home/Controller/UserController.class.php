<?php
// 第一步: 声明命名空间
namespace Home\Controller;

// 第二步: 使用父类控制器
use Think\Controller;

// 第三步: 定义自己的控制器并继承父类
class UserController extends Controller
{
    public function showUser()
    {
//        echo 'abc123';
        $name = '赵佶';
        $from = '宋朝';
        $this->assign('name', $name);// 分配模版变量
        $this->assign('from', $from);
        $this->display('user');
    }

    public function showUserB()
    {
        echo '传统路由模式(get传参数方式 http://www.php7tpsite/index.php?m=home&v=user&a=showuserb)';
    }


}