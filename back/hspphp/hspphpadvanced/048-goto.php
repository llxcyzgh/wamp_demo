<?php
header("content-type:text/html;charset=utf-8");
// goto的使用
/*
注意事项:
PHP中的goto有一定限制,只能在同一个文件和作用域中跳转,也就是无法跳出一个函数或类方法,也无法跨入另一个函数.
常见的用法是用来跳出循环或者switch,可以代替多层的break
 */

// a就是一个'label'标记
goto a;
echo 'aa';
a:
echo 'bb';

echo '<hr>';

for ($i = 0, $j = 50; $i < 100; $i++) {
    while ($j--) {
        if ($j == 17) {
            goto end;
        }
    }
}
echo "i = $i";
end:
echo 'j = 17';

echo '<hr>';
for ($i = 0, $j = 50; $i < 10; $i++, $j--) {
    if ($j == 17) {
        goto end2;
    }
}
echo "i = $i <br>";
end2:
echo "j = $j";
