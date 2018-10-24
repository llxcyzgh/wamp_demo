<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/8
 * Time: 18:30
 */
//require_once '../../../framework/core/Controller.class.php';
//require_once 'framework/core/Controller.class.php';//

namespace admin\controller;

use framework\core\Controller;

class CategoryController extends Controller
{
    // 查询分类列表
    public function indexAction()
    {
        die('hello');
        // 命令模型查询数据
//        require_once '../model/Factory.class.php';
        $model = Factory::M('CategoryModel');
        // 查询分类列表
        $cat_list = $model->cat_select();

        // 命令视图显示数据
        // 使用smarty将分类列表的数据分配过去

        $this->smarty->assign('cat_list', $cat_list);
        $this->smarty->display('view/cat_list.html');
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