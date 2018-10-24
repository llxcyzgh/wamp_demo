<?php

/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/16
 * Time: 9:49
 */

namespace home\controller;

// 商品控制器操作的是商品相关的操作
use framework\core\Controller;

class GoodController extends Controller
{
    public function indexAction()
    {
        // 命令商品模型
        // 1.传递模型时,不需要每次传递 Model
        // 2.如果加上了命名空间,直接使用;如果没有命名空间,则拼接上
        $goods_model = Factory::M('GoodsModel');
    }


}