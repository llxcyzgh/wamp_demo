<?php
header("content-type:text/html;charset=utf-8");
$n = 6;

// 直角金字塔
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $i + 1; $j++) {
        echo '*';
    }
    echo '<br>';
}

echo '<hr>';

// 等腰金字塔
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        echo '&ensp;';
    }
    for ($j = 0; $j < ($i + 1) * 2 - 1; $j++) {
        echo '*';
    }
    echo '<br>';
}

echo '<hr>';

// 空心等腰金字塔
for ($i = 0; $i < $n; $i++) {
    if ($i != $n - 1) {
        for ($j = 0; $j < 2 * $n - 1; $j++) {
            if ($j != $n - 1 - $i && $j != $n - 1 + $i) {
                echo '0';
            } else {
                echo '1';
            }
        }
        echo '<br>';
    } else {
        for ($j = 0; $j < 2 * $n - 1; $j++) {
            echo '1';
        }
    }
}

echo '<hr>';
// 空心菱形
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < 2 * $n - 1; $j++) {
        if ($j != $n - 1 - $i && $j != $n - 1 + $i) {
            echo '&emsp;';
        } else {
            echo '日';
        }
    }
    echo '<br>';
}

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < 2 * $n - 1; $j++) {
        if ($j != $i + 1 && $j != 2 * $n - 1 - 1 - 1 - $i) {
            echo '&emsp;';
        } else {
            echo '日';
        }
    }
    echo '<br>';
}
