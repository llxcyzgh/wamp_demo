<?php
/* Smarty version 3.1.30, created on 2018-03-20 15:31:52
  from "F:\WAMP_demo\hspphp2017\117-ask_answer_project\application\admin\view\category\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab0b8e800df06_34828265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37a204a5be17a1e3b5fa0a9efd92bc14ada8d795' => 
    array (
      0 => 'F:\\WAMP_demo\\hspphp2017\\117-ask_answer_project\\application\\admin\\view\\category\\edit.html',
      1 => 1521531065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/layout.html.bak' => 1,
  ),
),false)) {
function content_5ab0b8e800df06_34828265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25155ab0b8e8007770_94546383', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:common/layout.html.bak", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_25155ab0b8e8007770_94546383 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="aw-header">
    <button class="btn btn-sm mod-head-btn pull-left">
        <i class="icon icon-bar"></i>
    </button>

    <div class="mod-header-user">
        <ul class="pull-right">

            <li class="dropdown username">
                <a data-toggle="dropdown" class="dropdown-toggle" href="">
                    <img width="30" class="img-circle" src="../static/common/avatar-mid-img.png">
                    itbull
                    <span class="caret"></span>
                </a>

                <ul class="dropdown-menu pull-right mod-user">
                    <li>
                        <a target="_blank" href="">
                            <i class="icon icon-user"></i>
                            账户
                        </a>
                    </li>

                    <li>
                        <a href="login.html">
                            <i class="icon icon-logout"></i>
                            退出
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div id="aw-side" class="aw-side ps-container">
    <div class="mod">
        <div class="mod-logo">
            <img alt="" src="../static/admin/img/logo.png" class="pull-left">
            <h1>有问必答</h1>
        </div>

        <div class="mod-message">
            <div class="message">
                <a title="首页" target="_blank" href="../index.html" class="btn btn-sm">
                    <i class="icon icon-home"></i>
                </a>

                <a title="退出" href="login.html" class="btn btn-sm">
                    <i class="icon icon-logout"></i>
                </a>
            </div>
        </div>

        <ul class="mod-bar">
            <input type="hidden" val="0" id="hide_values">
            <li>
                <a class=" icon icon-ul" href="index.html">
                    <span>摘要信息</span>
                </a>
            </li>

            <li>
                <a data="icon" class=" icon icon-reply active" href="javascript:;">
                    <span>内容管理</span>
                </a>

                <ul class="hide" style="display: block;">
                    <li>
                        <a class="active" href="category.html">
                            <span>分类管理</span>
                        </a>
                    </li>
                    <li>
                        <a href="question.html">
                            <span>问题管理</span>
                        </a>
                    </li>
                    <li>
                        <a href="topic.html">
                            <span>话题管理</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a data="icon" class=" icon icon-user" href="javascript:;">
                    <span>用户管理</span>
                </a>

                <ul class="hide">
                    <li>
                        <a href="user.html">
                            <span>用户列表</span>
                        </a>
                    </li>
                    <li>
                        <a href="role.html">
                            <span>用户角色</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a data="icon" class="icon icon-setting" href="javascript:;">
                    <span>全局设置</span>
                </a>

                <ul class="hide">
                    <li>
                        <a href="site.html">
                            <span>站点信息</span>
                        </a>
                    </li>
                    <li>
                        <a href="regedit.html">
                            <span>注册访问</span>
                        </a>
                    </li>
                    <li>
                        <a href="mail.html">
                            <span>邮件设置</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a data="icon" class=" icon icon-job" href="javascript:;">
                    <span>工具</span>
                </a>

                <ul class="hide">
                    <li>
                        <a href="tool.html">
                            <span>系统维护</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="ps-scrollbar-x-rail" style="width: 235px; display: none; left: 0px; bottom: 3px;">
        <div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps-scrollbar-y-rail" style="top: 0px; height: 607px; display: inherit; right: 0px;">
        <div class="ps-scrollbar-y" style="top: 0px; height: 560px;"></div>
    </div>
</div>

<div class="aw-content-wrap">
    <form onsubmit="return false" method="post" id="category_form"
          action="http://localhost/wecenter/?/admin/ajax/save_category/">
        <input type="hidden" value="1" name="category_id">
        <div class="mod">
            <div class="mod-head">
                <h3>
                    <span class="pull-left">分类编辑</span>
                </h3>
            </div>
            <div class="tab-content mod-content">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-3 control-label">分类标题:</span>
                                <div class="col-sm-5 col-xs-8">
                                    <input type="text" value="默认分类" name="title" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">
                                <span class="col-sm-4 col-xs-3 control-label">父级分类:</span>
                                <div class="col-sm-5 col-xs-8">
                                    <select class="form-control" name="parent_id">
                                        <option value="0">无</option>
                                        <option value="1">默认分类</option>
                                        <option value="2">PHP</option>
                                        <option value="3">前端</option>
                                        <option value="4">Java</option>
                                        <option value="5">UI</option>
                                        <option value="6">生活</option>
                                        <option value="8">iOS</option>
                                        <option value="9">安卓</option>
                                        <option value="10">设计</option>
                                        <option value="13">MySQL</option>
                                        <option value="14">Linux</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>
                            <input type="button" onclick="AWS.ajax_post($('#category_form'));"
                                   class="btn btn-primary center-block" value="保存设置">
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </form>
</div>


<div class="aw-footer">
    <p>
        Copyright &copy; 2016-2099 - Powered By
        <a target="blank" href="http://helloitbull.net/">有问必答 1.0</a>
    </p>
</div>
<?php
}
}
/* {/block "content"} */
}
