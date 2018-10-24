<?php
header("content-type:text/html;charset=utf-8");
/*
要求:
1.使用js在前端验证数据
2.使用php在后台对数据验证
3.先使用两个文件,myCal.html,myCal.php后台
 */
// 接收数据
$num1 = isset($_POST['num1']) && is_numeric($_POST['num1']) ? $_POST['num1'] : '';
$num2 = isset($_POST['num2']) && is_numeric($_POST['num2']) ? $_POST['num2'] : '';
$oper = isset($_POST['operator']) ? $_POST['operator'] : '';
// 数据验证
if ($num1 == '' || $num2 == '' || $oper == '') {

    /* echo 'num1,num2不能为空,且必须为数字';
    header('Location:54-test_calculator.html');*/

    $info = <<<INFO
<script>
	alert('服务器=>你的数据有误');
	window.location.href="054-test_calculator.html";
</script>
INFO;
    // 跳转后一定要退出,不然浪费资源
    echo $info;
    exit;

}
$res = 0;

// echo $num1, $num2, $oper;
switch ($oper) {
    case '+':
        $res = $num1 + $num2;
        break;
    case '-':
        $res = $num1 - $num2;
        break;
    case '*':
        $res = $num1 * $num2;
        break;
    case '/':
        $res = $num1 / $num2;
        break;
    default:
        $res = $num1 % $num2;
        break;
}
echo "结果是: $res";
