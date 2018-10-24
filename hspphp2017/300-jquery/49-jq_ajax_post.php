<?php
$user_list = array('peter', 'green', 'jim', 'lucy', 'lily');
if (in_array($_POST['username'], $user_list)) {
    echo '0用户已经存在';
} else {
    echo '1用户名可以使用';
}
