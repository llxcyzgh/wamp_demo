<?php
/* Smarty version 3.1.30, created on 2018-07-23 18:14:40
  from "F:\WAMP_demo\hspphp2017\096-smarty_cookie&session.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b55aa901058e5_04102307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7027c1d7937dba2e68c730e81fd38477919348cc' => 
    array (
      0 => 'F:\\WAMP_demo\\hspphp2017\\096-smarty_cookie&session.html',
      1 => 1532340873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b55aa901058e5_04102307 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'F:\\WAMP_demo\\hspphp2017\\smarty\\plugins\\modifier.capitalize.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
cookie：<?php echo $_SERVER['cookie']['is_login'];?>
<br>
session: <?php echo $_COOKIE['cart'];?>
<br>
将小写字母首字母大写：<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['str']->value);?>
<br>
将字符串整体大写：<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['str']->value, 'UTF-8');?>
<br>
统计字符数量：<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['str']->value, $tmp);?>
<br>
默认值（如果变量为空、''）使用默认值：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['number']->value)===null||$tmp==='' ? 100 : $tmp);?>
<br>
字符串缩进：<br><?php echo preg_replace('!^!m',str_repeat('-',2),$_smarty_tpl->tpl_vars['str']->value);?>
<br><br><?php echo preg_replace('!^!m',str_repeat('&emsp;',2),$_smarty_tpl->tpl_vars['str']->value);?>

</body>
</html><?php }
}
