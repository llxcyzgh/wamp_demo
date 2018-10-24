<?php
header("content-type:text/html;charset=utf-8");
/*
有一堆桃子,猴子第一天吃了其中的一半,并再多吃了一个!以后每天猴子都吃其中的一半,然后再多吃一个.当到第十天时,想再吃时(即还没吃),发现只有1个桃子.问:最初有多少个桃子?
 */
function ff($n)
{
    if ($n == 10) {
        return 1;
    } else {
//         return ff($n) = (ff($n + 1) + 1) * 2 ;  //错的,不要把ff($n)加进去
        return (ff($n + 1) + 1) * 2;
    }
}
echo ff(1);
