<?php
// 自定义计算相对路径的函数,$b相对于$a的路径
/*
 * param:a
 */
/*

$a = '/a/b/c/d/e.php';
$b = '/a/b/12/34/c.php';
//../../12/34/c.php
echo getRelativelyPath($a,$b);
//求$b相对于$a的相对路径
function getRelativelyPath($a,$b){
    $a=explode('/',$a);
    $b=explode('/',$b);
    var_dump($a);
//print_r($b);
    $c=array_values(array_diff($a,$b));
    $d=array_values(array_diff($b,$a));
// var_dump($c);
//var_dump($d);
    array_pop($c);
    foreach($c as &$v){
        $v='..';
    }
    var_dump($c);
    var_dump($d);
    $arr=array_merge($c,$d);
    var_dump($arr);
    $str=implode("/",$arr);
    echo $str;
}

exit;
*/

function relativePath($a, $b)
{
    // 当前文件路径 $a
    // 要引入的文件路径 $b
    // 返回要引入和文件的相对路径
    $a_arr = explode('/', dirname($a));
    $b_arr = explode('/', dirname($b));

    var_dump($a_arr, $b_arr);

    $x = 0;
    $a_len = count($a_arr);
    for ($i = 0; $i < $a_len; $i++) {
        if ($a_arr[$i] !== $b_arr[$i]) {
            $x = $i;
            echo '<br>*'.$i.'*<br>';
            break;
        }
    }

    $b_len = count($b_arr);
    $res_dir = '../';
    for ($i = $x; $i < $b_len; $i++) {
        $res_dir .= $b_arr[$i] . '/';
    }
    return $res_dir . basename($b);
}

$a = 'F:/WAMP_demo/hspphp2017/000-temp.php';
$b = 'F:/WAMP_demo/hspphp/phpbasic/01-four_kind_of_writting.php';
//require_once '../hspphp/phpbasic/01-four_kind_of_writting.php';
echo basename($a);
echo "<br>";
echo dirname($a);
echo "<br>";


//    ../../../c.php
echo relativePath($a, $b);

