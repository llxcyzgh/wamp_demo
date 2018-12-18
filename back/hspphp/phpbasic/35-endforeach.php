<?php
// php和html混编时如何在html是写入php
$arr = array(1, 2, 3, 4, 5);
foreach ($arr as $key => $value) {
    echo $value;
};

echo '<hr>';

foreach ($arr as $key => $value):
    echo $value * 2;
endforeach;
