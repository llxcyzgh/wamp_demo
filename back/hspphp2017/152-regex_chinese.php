<?php
$reg = '/./u';

$reg = '/[\x{4e00}-\x{9fa5}]/u';//utf8转码之后的中文的范围:转码之后的第一个中文 \x{4e00}  转码后的最后一个中文 \x{9fa5}

$str = '人民中国 abc';

preg_match_all($reg, $str, $match);
var_dump($match);