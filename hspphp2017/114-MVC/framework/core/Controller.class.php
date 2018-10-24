<?php

namespace framework\core;
class Controller
{
    protected $smarty;

    public function __construct()
    {
        $this->smarty                  = new \Smarty();
        $this->smarty->left_delimiter  = '<{';
        $this->smarty->right_delimiter = '}>';
        $this->smarty->setTemplateDir(APP_PATH . MODULE . '/view/');
        $this->smarty->setCompileDir(APP_PATH . MODULE . '/runtime/tpl_c');
    }
}