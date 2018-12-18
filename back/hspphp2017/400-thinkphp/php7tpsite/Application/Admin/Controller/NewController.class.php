<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/4/3
 * Time: 9:20
 */

namespace Admin\Controller;

use Think\Controller;

class NewController extends Controller
{
    public function showNews()
    {
        $this->display('shownews');// 显示本控制器下的其它方法
    }
}
