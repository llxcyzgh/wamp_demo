<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="check.php" method="post">
    <label>请输入验证码: <input type="text" name="captcha"></label>
    <br>
    <img src="captcha.php" alt="验证码">
    <br>
    <input type="submit" value="提交">

</form>
</body>
</html>