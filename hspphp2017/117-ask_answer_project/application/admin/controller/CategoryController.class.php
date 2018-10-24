<?php

namespace admin\controller;

use framework\core\Controller;
use framework\core\Factory;
use framework\tools\Thumbnail;
use framework\tools\Upload;

/*
 * 分类模块:主要负责:后台添加分类、删除分类、修改分类、查询分类等
 * 操作分类数据表
 */

class CategoryController extends Controller
{
    // 显示问题列表
    public function indexAction()
    {
        $cat_list = $this->treeCategory();
        $this->smarty->assign('cat_list', $cat_list);
        $this->smarty->display('category/index.html');
    }

    // 显示添加内容
    public function addAction()
    {
        // 先查询分类的信息
        $cat_list = $this->treeCategory();
//        var_dump($cat_list);
//        die;
        // 再分配显示到页面
        $this->smarty->assign('cat_list', $cat_list);
        $this->smarty->display('category/add.html');
    }

    // 提交表单并接收表单的数据
    public function addHandleAction()
    {
        // 导入上传类和图像压缩类
        $upload = new Upload();
        // 设置上传的路径
        $upload->upload_path = UPLOADS_PATH . 'category/';
        $upload_file_address = $upload->doUpload($_FILES['cat_logo']);

        // 设置缩略图的路径
        $thumb_path         = THUMB_PATH . 'category/';
        $thumb              = new Thumbnail(UPLOADS_PATH . 'category/' . $upload_file_address, $thumb_path);
        $thumb_file_address = $thumb->makeThumbnail(50, 50);

        // 将缩略图的地址和其它表单项一同保存到category数据表
        $data              = array();
        $data['cat_name']  = $_POST['cat_name'];
        $data['cat_desc']  = $_POST['cat_desc'];
        $data['parent_id'] = $_POST['parent_id'];
        $data['cat_logo']  = $thumb_file_address;

        // 实例化模型对象,保存到数据表
        $model  = Factory::M('Category');
        $result = $model->insert($data);
        if ($result) {
            // 成功添加,跳转到列表页面
            $this->jump('?m=admin&c=category&a=indexAction', '添加成功', 3);
        } else {
            // 添加失败,回到当前页面
            $this->jump('?m=admin&c=category&a=addAction', '添加失败', 3);
        }
    }

    // 显示编辑表单
    public function editAction()
    {
        $this->smarty->display('category/edit.html');
    }

    // 提交表单并更新
    public function updateAction()
    {

    }

    // 删除操作
    public function delete()
    {

    }

    // 查询分类信息list
    public function treeCategory()
    {
        $model    = Factory::M('Category');
        $cat_list = $model->find();
        $cat_list = $model->getTreeCategory($cat_list);
        return $cat_list;
    }

}