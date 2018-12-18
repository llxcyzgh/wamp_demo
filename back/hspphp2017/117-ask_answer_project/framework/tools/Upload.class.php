<?php

namespace framework\tools;
class Upload
{
    // 定义成员属性
    private $upload_path = 'uploads\\';// 上传文件保存的路径
    private $maxsize = 1024 * 1024;// 允许上传文件的最大限制
    private $prefix = 'tn_';// 文件名的前缀
    private $allow_type = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');// 允许上传的文件类型

    // 提供修改、读取的方法:set get
    public function __set($prop, $val)
    {
        if (property_exists($this, $prop)) {
            $this->$prop = $val;
        }
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    // 功能,方法,具体实现文件上传的方法
    public function doUpload($arr_file_info)
    {
        // 1. 获取从表单中上传的文件信息,另存为数组 $arr_file_info
        if (!$arr_file_info) {
            header('refresh:10;url=30-file_onload.html');
            echo '文件上传失败, 请重新上传<br>';
        }

        // 2. 限制上传的文件大小
        $max = $this->maxsize;
        if ($arr_file_info['size'] > $max) {
            header('refresh:3;url=30-file_onload.html');
            echo '上传文件大小不能超过 1M, 请重新上传<br>';
            exit;
        }

        // 3. 限制文件类型
        $allow_type = $this->allow_type;
        // 3.1 初步用$_FILE 的type 来判断[这里的type是从文件上传的后缀名而得来,有风险]
        $file_type = $arr_file_info['type'];
        //if(false === array_search($file_type,$allow_type)){
        if (!in_array($file_type, $allow_type)) {
            header('refresh:3;url=30-file_onload.html');
            echo '上传文件类型不支持, 请重新上传<br>';
            exit;
        }
        // 3.2 深度过滤文件类型(防止js等文件改名为.jpg而蒙混过关),也就是不依赖$_FILE 的type而获取文件类型,而是对文件作检测
        $finfo     = new \finfo(FILEINFO_MIME_TYPE);
        $file_type = $finfo->file($arr_file_info['tmp_name']);
        if (!in_array($file_type, $allow_type)) {
            header('refresh:3;url=30-file_onload.html');
            echo '上传文件类型不支持, 请重新上传 [文件后缀可能得到篡改]<br>';
            exit;
        }

        // 4. 按日期新建分目录
        $dir    = $this->upload_path;// 本来就创建好的根目录
        $subdir = date('Ymd') . '\\';// 按日期创建子目录
        if (!is_dir($dir . $subdir)) {
            mkdir($dir . $subdir, 0777, true);
        }

        // 5. 根据文件名后缀, 新建唯一文件名
        $suffix       = strchr($arr_file_info['name'], '.');
        $new_filename = uniqid($this->prefix, true) . $suffix;
        $des          = $dir . $subdir . $new_filename;

        // 6. 保存在指定目录
        if (move_uploaded_file($arr_file_info['tmp_name'], $des)) {
            // 上传成功后,返回文件地址,然后还要保存到数据库
            // 通常返回从日期开始的相对路径,便于将来进行拼接
            return $subdir . $new_filename;
        } else {
            return false;
        }
    }
}