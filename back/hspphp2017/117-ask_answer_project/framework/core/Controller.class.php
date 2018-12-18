<?php

namespace framework\core;
class Controller
{
    protected $smarty;

    public function __construct()
    {
        // 初始化时区
        $this->initTimeZone();
        // 初始化smarty
        $this->initSmarty();
    }

    public function initTimeZone()
    {
        date_default_timezone_set('PRC');
    }

    public function initSmarty()
    {
        $this->smarty                  = new \Smarty();
        $this->smarty->left_delimiter  = '<{';
        $this->smarty->right_delimiter = '}>';
        $this->smarty->setTemplateDir(APP_PATH . MODULE . '/view/');
        $this->smarty->setCompileDir(APP_PATH . MODULE . '/runtime/tpl_c');
    }

    // 页面跳转的方法
    public function jump($url, $message, $delay = 3)
    {
        header("Refresh:$delay;url=$url");
        echo $message;
        die;
    }


}