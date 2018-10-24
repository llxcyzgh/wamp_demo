<?php
/* Smarty version 3.1.30, created on 2018-04-13 15:13:10
  from "F:\WAMP_demo\hspphp2017\097-smarty_modifier.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad05886889a11_46773096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7db4d6b5f64ec8551ab941d8a9249dd067f0ea9' => 
    array (
      0 => 'F:\\WAMP_demo\\hspphp2017\\097-smarty_modifier.html',
      1 => 1520319334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad05886889a11_46773096 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'F:\\WAMP_demo\\hspphp2017\\smarty\\plugins\\modifier.truncate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['script']->value, ENT_QUOTES, 'UTF-8', true);?>


<img src="<?php echo rawurlencode($_smarty_tpl->tpl_vars['book']->value);?>
" alt="">
<br>
<?php echo $_smarty_tpl->tpl_vars['str']->value;?>

<br>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['str']->value,12);?>

<br>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['str']->value,12,'---');?>

<br>


</body>
</html><?php }
}
