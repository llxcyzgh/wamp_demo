<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php echo ($name); ?> 来自 <?php echo ($from); ?> <br>
<br>： 会替换成当前网站的地址（不含域名）
<br>/index.php： 会替换成当前应用的URL地址 （不含域名）
<br>/index.php/Home：会替换成当前模块的URL地址 （不含域名）
<br>/index.php/Home/User（__或者/index.php/Home/User 兼容考虑）： 会替换成当前控制器的URL地址（不含域名）
<br>/index.php/Home/User/showuser：会替换成当前操作的URL地址 （不含域名）
<br>/home/user/showuser： 会替换成当前的页面URL
<br>/Public：会被替换成当前网站的公共目录 通常是 /Public/
</body>
</html>