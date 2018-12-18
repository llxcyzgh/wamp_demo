<?php
header("content-type:text/html;charset=utf-8");
// if...else... 双分支
$age = 19;
if ($age > 18) {
    echo '年龄大于18,要对自己负责!';
} else {
    echo '年龄小于18,这次放过你了!';
}
