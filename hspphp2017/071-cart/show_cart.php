<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            text-align: center;
        }
        th,td{
            border: 1px solid #000;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>商品名称</th>
        <th>商品数量</th>
    </tr>

    <?php session_start();$arr=$_SESSION['cart'];foreach ($arr as $key => $val): ?>
        <tr>
            <td><?php echo $key;?></td>
            <td><?php echo $val;?></td>
        </tr>
    <?php endforeach; ?>
</table>

<br>
<a href="goods_list.php">点击进入商品列表</a>

</body>
</html>
