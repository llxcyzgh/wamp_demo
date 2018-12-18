<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/28
 * Time: 11:30
 */
if(strpos(($_SERVER['HTTP_REFERER']),'http://www.zjw.cn')===0){
   // do
    echo 'name zjw<br>';
    echo 'gender male<br>';
    echo 'age 27<br>';
}else{
    header('location:err.php');
}