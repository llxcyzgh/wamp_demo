<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
// 让表单提交后再运行php代码
    header("content-type:text/html;charset=utf-8");
    $num1 = isset($_POST['num1']) && is_numeric($_POST['num1']) ? $_POST['num1'] : '';
    $num2 = isset($_POST['num2']) && is_numeric($_POST['num2']) ? $_POST['num2'] : '';
    $oper = $_POST['operator'];
    $res  = 0;
    if ($num1 == '' || $num2 == '') {
        echo "<script>alert('第一个数和第二个数不能为空, 且必须为数字');window.location.href='55-test_calculator.php'</script>";
        exit;
    }
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
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>我的计算器</title>
</head>
<body>
<form action="55-test_calculator.php" method="post" onsubmit="checkForm()">
	第一个数: <input type="text" id="num1" name="num1"><br><br>
	运算符号:
	<select name="operator">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select><br><br>
	第二个数: <input type="number" id="num2" name="num2"><br><br>
	结果: <input type="number" id="res" name="res" placeholder="结果" value="<?php if ($_SERVER['REQUEST_METHOD'] == "POST") {echo $res;}?>"><br><br>
	<input type="submit" value="计算">
</form>
<script>
	function $(id){
		return document.getElementById(id);
	}

	function checkForm(){
		var val_num1 = $("num1").value;
		var val_num2 = $("num2").value;
		var obj_res = $("res");
		if(val_num1 == "" || val_num2 == ""){
			alert("第一个数和第二个数都不能为空");
			return false;
		}else if(isNaN(val_num1) || isNaN(val_num2)){
			alert("第一个数和第二个数都只能为数字");
			return false;
		}else{
			return true;
		}
	}
</script>

</body>
</html>
