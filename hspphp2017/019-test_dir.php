<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/1/31
 * Time: 22:15
 */
/*
1. 编写一个程序，创建一个文件abc.txt，文件放在目录, 根据当前的日期(年月日) 的目录下，比如在d:盘根目录下,要求有必要的安全判断，具体创建情况如: D:2018/0131/abc.txt

2. 给abc.txt 文件中写入100句 'hello,world'
 */

// 1. 计算出当前年月日
//$year = date('Y',time());
//$month = date('m',time());
//$day = date('d',time());
//echo $year.'<br>'.$month.$day;
$today = getdate();
$year  = $today['year'];
// 月份或一个月中的天数小于10,则前面加0,如 0205 表示 2月5日
$month = $today['mon'] < 10 ? '0' . $today['mon'] : $today['mon'];
$day   = $today['mday'] < 10 ? '0' . $today['mday'] : $today['mday'];
//echo $year . '<br>' . $month . $day;

// 2. 按年月日创建目录[文件夹]
$full_dir_path = "D:\\$year\\$month$day";
echo $full_dir_path;
if ($full_dir_path) {
    echo '目录已经存在,无需重新创建<br>';
} else {
//    if(mkdir($full_dir_path)){
    //        echo '创建目录成功<br>';
    //    }else{
    //        echo '创建目录失败<br>';
    //    }
}
