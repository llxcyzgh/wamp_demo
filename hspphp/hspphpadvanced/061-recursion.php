<?php
header("content-type:text/html;charset=utf-8");
// recursion 递归:就是函数调用自身
// 在文件遍历的时候用得到
function abc($n)
{
    if ($n > 2) {
//        abc(--$n);
        abc($n-1);
    }
    echo '$n = ' . $n . '<br>';
}
abc(10);
