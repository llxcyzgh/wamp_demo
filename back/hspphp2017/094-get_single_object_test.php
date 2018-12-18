<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/5
 * Time: 18:02
 */

class myZhu{
}

$my1 = new myZhu();
$my2 = new myZhu();
$my3 = new myZhu();

var_dump($my1,$my2,$my3);

echo '<hr>';

require_once '093-DAOPDO.class.php';
$pdo1 = DAOPDO::getSingleton();
$pdo2 = DAOPDO::getSingleton();
$pdo3 = DAOPDO::getSingleton();
var_dump($pdo1,$pdo2,$pdo3);
