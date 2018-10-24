<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/1
 * Time: 16:50
 */
// 删除一个目录(里面包含多级子目录和子文件)
// 递归的要点是:找到需要完成的最终的基本的工作[最小单元][这里最终就是判断一个路径是文件还是空目录,如果文件就删除文件,如果是空目录就删除目录]

function deleteWholeDir($dirname)
{
    if (!is_dir($dirname)) {
        # 不是一个目录,就是一个文件,直接删除该文件
        if (unlink($dirname)) {
            echo '删除文件 ' . $dirname . ' 成功 <br>';
        } else {
            echo '删除文件 ' . $dirname . ' 失败<br>';
        }
    } else {
        # 是一个目录,则遍历其中的文件和目录,把其中的文件删除unlink,然后把该目录删除 rmdir
        $dir_handle = opendir($dirname);
        while (($name = readdir($dir_handle)) !== false) {
            # 排除目录内的. 和..
            if ($name != '.' && $name != '..') {
                # $dirname.'/'.$name 进行递归
                deleteWholeDir($dirname . '/' . $name);
            }
        }
        sleep(5);
        closedir($dir_handle);
        if (rmdir($dirname)) {
            echo '删除目录 ' . $dirname . ' 成功<br>';
        } else {
            echo '删除目录 ' . $dirname . ' 失败<br>';
        }
    }
}

$dirname = 'D:/temp';
deleteWholeDir($dirname);
