<?php
header("content-type:text/html;charset=utf-8");
$person1     = array('xm' => '宋江', 'xb' => '男', 'wh' => '及时雨');
$person2     = array('xm' => '卢俊义', 'xb' => '男', 'wh' => '玉麒麟');
$person3     = array('xm' => '吴用', 'xb' => '男', 'wh' => '智多星');
$person4     = array('xm' => '林冲', 'xb' => '男', 'wh' => '豹子头');
$person_list = array($person1, $person2, $person3, $person4);
require '088-test.html';
