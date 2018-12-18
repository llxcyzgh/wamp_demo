<?php

namespace framework\core;
class Controller
{
    protected $smarty;

    public function __construct()
    {
        $this->smarty = new \Smarty();
        $this->smarty->left_delimiter = '<{';
        $this->smarty->right_delimiter = '>}';
    }
}