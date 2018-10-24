<?php
header("content-type:text/html;charset=utf-8");
// 数组的遍历: for 或者 foreach
$colors = array('red', 'blue', 'green', 'yellow');
for ($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . '<br>';
}

echo '<hr>';

foreach ($colors as $k => $v) {
    echo $k . ' => ' . $v . '<br>';
}

echo '<hr>';

foreach ($colors as $v) {
    echo $v . '<br>';
}
