<?php
header("content-type:text/html;charset=utf-8");
/*empty() 的使用说明
在如下情况,是empty
'',0,'0',null,false,array() 以及没有任何属性的对象
 */
$str = '';
if (empty($str)) {
    echo 'empty';
} else {
    echo 'no empty';
}
