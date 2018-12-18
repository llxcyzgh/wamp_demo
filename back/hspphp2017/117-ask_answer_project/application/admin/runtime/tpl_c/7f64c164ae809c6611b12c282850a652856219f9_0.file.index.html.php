<?php
/* Smarty version 3.1.30, created on 2018-03-21 15:28:01
  from "F:\WAMP_demo\hspphp2017\117-ask_answer_project\application\admin\view\category\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab20981e87d52_51562604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f64c164ae809c6611b12c282850a652856219f9' => 
    array (
      0 => 'F:\\WAMP_demo\\hspphp2017\\117-ask_answer_project\\application\\admin\\view\\category\\index.html',
      1 => 1521617280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/layout.html.bak' => 1,
  ),
),false)) {
function content_5ab20981e87d52_51562604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_268865ab20981e844a8_72182742', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:common/layout.html.bak", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_268865ab20981e844a8_72182742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="aw-content-wrap">
    <div class="mod">
        <div class="mod-head">
            <h3>
                <span class="pull-left">分类管理</span>
            </h3>
        </div>

        <div class="tab-content mod-body">
            <div class="alert alert-success hide error_message"></div>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>分类标题</th>
                        <th>排序</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <form onsubmit="return false" method="post" action="#" id="category_form"></form>
                    <tr>
                        <td>
                            <a href="#">默认分类</a>
                        </td>
                        <td>
                            <div class="col-sm-6 clo-xs-12 col-lg-offset-3">
                                0
                            </div>
                        </td>
                        <td>
                            <a title="" class="icon icon-edit md-tip" data-toggle="tooltip" href="category_edit.html"
                               data-original-title="编辑"></a>
                            <a title="" class="icon icon-trash md-tip" data-toggle="tooltip"
                               onclick="AWS.ajax_request(G_BASE_URL + '/admin/ajax/remove_category/', 'category_id=1');"
                               data-original-title="删除"></a>

                        </td>
                    </tr>


                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_list']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                    <tr>
                        <td>
                            <a href="#"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</a>
                        </td>
                        <td>
                            <div class="col-sm-6 clo-xs-12 col-lg-offset-3">
                                0
                            </div>
                        </td>
                        <td>
                            <a title="" class="icon icon-edit md-tip"
                               href="?m=admin&c=Category&a=editAction&id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
"
                               data-original-title="编辑"></a>
                            <a title="" class="icon icon-trash md-tip"
                               href="?m=admin&c=Category&a=deleteAction&id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
"
                               data-original-title="删除"></a>

                        </td>
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



                    </tbody>
                    <tfoot class="mod-foot-center">
                    <tr>
                        <td colspan="3">
                            <form onsubmit="return false" method="post"
                                  action="http://localhost/wecenter/?/admin/ajax/save_category/" id="add_category_form">

                                <div class="pull-right" style="margin-right: 150px">
                                    <a class="btn-primary btn" href="?m=admin&c=category&a=addAction">添加分类</a>
                                </div>
                            </form>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="hide" id="target-category">
        <option value="1">默认分类</option>
    </div>
</div>
<?php
}
}
/* {/block "content"} */
}
