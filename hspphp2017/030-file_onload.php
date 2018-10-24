<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/2
 * Time: 16:32
 */
// 文件上传

/*
表单的数据类型
	(1)字符串类型(以字节流编码)
	(2)文件类型(以二进制编码)

文件上传要点:
1. 在表单form标签增加一个属性：enctype="multipart/form-data"
2. 提交的时候，需要通过input type="file" 文件域上传
3. 服务器接收的时候，通过$_FILES进行接收

 */
echo '<pre>';
var_dump($_FILES);//返回所有文件的一个关联数组[二维]
//sleep(10);
/*
array (size=1)
 'user_pic' =>
   array (size=5)
     'name' => string '微信截图_20180202111125.png' (length=31)
     'type' => string 'image/png' (length=9)
     'tmp_name' => string 'C:\wodepf\wamp64\tmp\php5787.tmp' (length=32)
     'error' => int 0
     'size' => int 73551
 */
var_dump($_FILES['user_pic']);//返回当前文件信息的一个关联数组[一维]
/*
array (size=5)
  'name' => string '微信截图_20180202111125.png' (length=31)
  'type' => string 'image/png' (length=9)
  'tmp_name' => string 'C:\wodepf\wamp64\tmp\php5787.tmp' (length=32)
  'error' => int 0
  'size' => int 73551
 */
/*
  'name' => 上传文件的名字
  'type' => 文件的mime类型(文件大类/文件小类)
  'tmp_name' => 存储在服务器上临时文件的名字
  'error' => 上传文件导致的错误代码
  'size' => 文件的大小(字节)
 */

/*
当我们点击提交表单时，会将file文件域里面的文件，先上传到临时的目录（可以在php的配置文件中设置[upload_tmp_dir ="c:/wodepf/wamp64/tmp"]），默认的临时目录是c:/windows/temp，
如果需要持久的保存，需要通过php的函数move_uploaded_file()移动到指定的位置，如果不移动，当php脚本执行结束，临时文件就会消失
 */

echo '<hr>';

// 将临时文件移动到服务器目录中[这里是 ]
$destination = 'uploads\\' . $_FILES['user_pic']['name'];
//echo $destination.'<br>';
echo '<br>-----------a'.$_FILES['user_pic']['tmp_name'].'b-----------<br>';
//sleep(5);
//exit;
$destination = iconv('utf-8', 'gbk', $destination);
echo $destination . '***';
if (move_uploaded_file($_FILES['user_pic']['tmp_name'], $destination)) {
    echo '上传成功<br>';
} else {
    echo '上传失败<br>';
}

$destination = iconv('gbk', 'utf-8', $destination);
//echo $destination . '***';
echo <<<_END
    <img src= {$destination}>
_END;
