<?php
header("content-type:text/html;charset=utf-8");
$age = 15;
// else if
if ($age > 18) {
    echo '犯罪,坐牢!';
} else if ($age > 10) {
    echo '进少管所!';
} else {
    echo '放你一马!';
}
// elseif
if ($age > 18):
    echo '犯罪,坐牢!';
elseif ($age > 10):
    echo '进少管所!';
else:
    echo '放你一马!';
endif;
/*else if 和 elseif 的区别
1.必须要注意的是 elseif 与 else if 只有在使用花括号的情况下才认为是完全相同。
2.如果用冒号来定义 if/elseif 条件，那就不能用两个单词的 else if，否则 PHP 会产生解析错误。
 */
