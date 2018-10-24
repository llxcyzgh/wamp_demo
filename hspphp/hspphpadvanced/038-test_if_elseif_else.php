<?php
header("content-type:text/html;charset=utf-8");
$num_cat = rand(1, 10);
$num_dog = rand(1, 10);
if ($num_cat > $num_dog):
    echo $num_cat . '>' . $num_dog . '猫猫势力强大';
elseif ($num_cat < $num_dog):
    echo $num_cat . '<' . $num_dog . '狗狗势力强大';
else:
    echo $num_cat . '=' . $num_dog . '猫狗数量相等';
endif;
