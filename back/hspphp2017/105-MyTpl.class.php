<?php

/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/7
 * Time: 11:56
 */

//  自定义模板引擎
class MyTpl
{
    private $tpl_vars = array();

    public function assign($k, $v)
    {
        $this->tpl_vars[$k] = $v;
    }

    public function display($filename)
    {
        // require_once 返回值是true、false,非法获取到内容
        // require_once $filename;
        $content = file_get_contents($filename);
//        $new_content = str_replace($search, $replace, $content);
        foreach ($this->tpl_vars as $k => $v) {
            $content = str_replace('{$' . $k . '}', $v, $content);
        }

        // 将替换好的内容写入到一个文件中[编译的文件]
        $file = 'tpl_c/' . mt_rand(1000, 9999) . md5($filename) . '.php';
        file_put_contents($file, $content);
        // 显示新的文件的内容
        require_once $file;
    }
}

$tpl = new MyTpl();
$tpl->assign('name', '李四');
$tpl->assign('age', 30);
$tpl->assign('sex', 'male');
$tpl->display('105-my_tpl.html');

