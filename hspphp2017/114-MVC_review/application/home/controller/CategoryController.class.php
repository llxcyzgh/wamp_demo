<?php

namespace home\controller;

use framework\core\Controller;
use framework\core\Factory;

class CategoryController extends Controller
{
    public function goods_add()
    {
        // 命令模型处理数据
        $model = Factory::M();
        $result = $model->goods_select();
        // 命令视图显示数据
        $smarty->assign('goods', $result);
        $smarty->display('goods_list.html');
    }
}
