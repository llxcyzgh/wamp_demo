<?php

//require_once '../../../framework/core/Controller.class.php';
//require_once 'framework/core/Controller.class.php';
namespace home\controller;

use framework\core\Controller;
use framework\core\Factory;

class IndexController extends Controller
{
    // 查询分类列表
    public function indexAction()
    {
//        die('hello');
        // 命令模型查询数据
        $model = Factory::M('home\model\GoodsModel');
        // 查询分类列表
        $goods_list = $model->goods_select();
//        $model->insert(array('goods_name' => '小米6', 'goods_price' => 2069));
//        $model->delete(48);
//        $data  = array('goods_name' => '小123456', 'goods_price' => 120.8);
//        $where = array('goods_id' => 50, 'goods_name' => 'abc');
//        $model->update($data, $where);
//        $data  = array('goods_name', 'goods_price');
//        $where = array('goods_id' => 52, 'goods_name' => 'abc');
//        $model->find($data, $where);

        // 命令视图显示数据
        // 使用smarty将分类列表的数据分配过去
        $this->smarty->assign('goods_list', $goods_list);
        $this->smarty->display('view/goods_list.html');
    }

    // 删除分类列表
    public function deleteAction()
    {

    }

    // 修改分类列表
    public function editAction()
    {

    }

    // 删除分类列表
    public function addAction()
    {

    }

}