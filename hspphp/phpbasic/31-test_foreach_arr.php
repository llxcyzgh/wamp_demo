<?php
// 遍历一个二维数组

$student['name'] = 'Green';
$student['gender'] = 'male';
$student['age'] = 20;
$student['parents'] = array('father'=>'Jim','mother'=>'Lucy');

//echo '<pre>';
//print_r($student);
//var_dump($student);

foreach ($student as $k => $v){
	if(!is_array($v)){
		echo $k.' => '.$v.'<br>';
	}else{
		foreach ($v as $k2 => $v2){
			echo $k2.' => '.$v2.'<br>';
		}
	}
}
