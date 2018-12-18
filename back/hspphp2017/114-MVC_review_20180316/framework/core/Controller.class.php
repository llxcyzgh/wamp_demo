<?php

/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/16
 * Time: 19:03
 */

namespace framework\core;
class Controller
{
    protected $smarty;

    public function __construct()
    {
        // 初始化时区
        $this->initTime();
        // 初始化smarty
        $this->initSmarty();
    }

    public function initTime()
    {
        date_default_timezone_set('PRC');
    }

    public function initSmarty()
    {
        $this->smarty                   = new \Smarty();
        $this->smarty->left_delimiter   = '<{';
        $this->smarty->lright_delimiter = '}>';
        $this->smarty->setTemplateDir('./application/' . MODULE . '/view/');
        $this->smarty->setCompileDir('./application/' . MODULE . '/runtime/tpl_c');
    }


}