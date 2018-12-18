<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>title</title>
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="../bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

    <form action="042-test_pages_&_search.php" method="post" class="text-center">
        <input type="text" name="search" value="<?php echo $search;?>">
<!--        --><?php //echo "<input type='text' name='search' value={$search}>"?>
        <input type="submit" value="搜索一下" class="text-success">
    </form>

    <table class="table">
        <caption class="text-center">商品列表</caption>
        <tr>
            <th  class="text-center">商品名称</th>
            <th  class="text-center">商品价格</th>
        </tr>

        <?php foreach($goods_list as $key => $val):?>
            <tr>
                <th  class="text-center"><?php echo $val['goods_name'];?></th>
                <th  class="text-center"><?php echo $val['shop_price'];?></th>
            </tr>
        <?php endforeach;?>

    </table>
    <?php echo $mypage->create();?>
</div>
</body>
</html>



