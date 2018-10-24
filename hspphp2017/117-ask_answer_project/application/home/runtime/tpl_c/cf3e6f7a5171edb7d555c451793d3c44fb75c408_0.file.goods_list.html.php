<?php
/* Smarty version 3.1.30, created on 2018-03-14 16:40:57
  from "F:\WAMP_demo\hspphp2017\114-MVC\view\goods_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa8e0190bb999_29125608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf3e6f7a5171edb7d555c451793d3c44fb75c408' => 
    array (
      0 => 'F:\\WAMP_demo\\hspphp2017\\114-MVC\\view\\goods_list.html',
      1 => 1520934959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa8e0190bb999_29125608 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods_list']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
 *** <?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
<br>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</body>
</html><?php }
}
