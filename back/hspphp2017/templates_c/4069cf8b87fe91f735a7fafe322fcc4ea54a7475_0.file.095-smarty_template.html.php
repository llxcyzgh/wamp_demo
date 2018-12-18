<?php
/* Smarty version 3.1.30, created on 2018-04-13 14:51:37
  from "F:\WAMP_demo\hspphp2017\095-smarty_template.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad0537930e266_53748892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4069cf8b87fe91f735a7fafe322fcc4ea54a7475' => 
    array (
      0 => 'F:\\WAMP_demo\\hspphp2017\\095-smarty_template.html',
      1 => 1520304646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad0537930e266_53748892 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        img{
            width: 200px;
        }
    </style>
</head>
<body>
小名是: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<br>
真名是: <?php echo $_smarty_tpl->tpl_vars['true_name']->value;?>

<br>
<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "img.conf", null, 0);
?>

孙艺珍照片: <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'img_url');?>
1.png" alt="">
<br>
孙艺珍照片: <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'img_url');?>
2.png" alt="">
<br>
孙艺珍照片: <img src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'img_url');?>
3.png" alt="">
</body>
</html><?php }
}
