<?php
header("content-type:text/html;charset=utf-8");
// 文件引入细节: 是先引入再执行,还是执行完后再引入?
// b.php
echo '<br> main body start';
require '059-wenjianyingruxijie_a.php';
echo '<br> main body end';
