<?php
header("content-type:text/html;charset=utf-8");
$n = $_POST['cengshu'];
echo $n . '<hr>';
// 半个金字塔
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $i + 1; $j++) {
        echo '*';
    }
    echo '<br>';
}
echo '<hr>';

// 一个金字塔
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < 2 * $n - 1; $j++) {
        if ($j >= $n - 1 - $i && $j <= $n - 1 + $i) {
            echo '日';
        } else {
            // echo '日';
            echo '&emsp;';
        }
    }
    echo '<br>';
}
echo '<hr>';

// 一个空心金字塔
for ($i = 0; $i < $n; $i++) {
    if ($i != $n - 1) {
        for ($j = 0; $j < 2 * $n - 1; $j++) {
            if ($j == $n - 1 - $i || $j == $n - 1 + $i) {
                echo '日';
            } else {
                // echo '日';
                echo '&emsp;';
            }
        }
        echo '<br>';
    } else {
        for ($j = 0; $j < 2 * $n - 1; $j++) {
            echo '日';
        }
    }
}
echo '<hr>';

// 一个空心菱形
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < 2 * $n - 1; $j++) {
        if ($j == $n - 1 - $i || $j == $n - 1 + $i) {
            echo '日';
        } else {
            // echo '日';
            echo '&emsp;';
        }
    }
    echo '<br>';
}
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < 2 * $n - 1; $j++) {
        if ($j == $i + 1 || $j == 2 * $n - 3 - $i) {
            echo '日';
        } else {
            echo '&emsp;';
        }
    }
    echo '<br>';
}
