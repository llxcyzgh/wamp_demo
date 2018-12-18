<?php
header("content-type:text/html;charset=utf-8");
function quickSort(&$arr, $left, $right)
{
    $i    = $left;
    $j    = $right;
    $temp = $arr[$left];
    while ($i < $j) {
        while ($i < $j && $arr[$j] >= $left) {
            $j--;
        }
        if ($i < $j) {
            $arr[$i] = $arr[$j];
        }
        while ($i < $j && $arr[$i] < $left) {
            $i++;
        }
        if ($i < $j) {
            $arr[$j] = $arr[$i];
        }
        $arr[$i] = $temp;
        quickSort($arr, $left, $i - 1);
        quickSort($arr, $i + 1, $right);
    }

}
$arr = array(3, 2, 1, 0, -1, -2, 20, 200);
for ($i = 0; $i < 1000; $i++) {
    $arr[] = rand(1, 100000);
}

echo date('H:i:s');
quickSort($arr, 0, count($arr) - 1);
echo date('H:i:s');
echo '<pre>';
print_r($arr);
