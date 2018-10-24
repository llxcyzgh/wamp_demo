<?php

/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/16
 * Time: 19:03
 */

namespace framework\core;
class Framework
{
    public function __construct()
    {
        $config1           = $this->loadFrameworkConfig();
        $config2           = $this->loadCommonConfig();
        $GLOBALS['congif'] = array_merge($config1, $config2);

        $config3           = $this->loadModuleConfig();
        $GLOBALS['congif'] = array_merge($GLOBALS['congif'], $config3);


    }

    public function initConst()
    {
        define('ROOT_PATH', str_replace('\\', '/', getcwd() . '/');
    }

    public function initAutoLoad()
    {
        spl_autoload_register(array($this, "autoloader"));
    }

    public function autoloader($className)
    {
        if ($className == 'Smarty') {
            require_once './framework/vendor/smarty/Smarty.class.php';
        }
        // 拼接类名称
        $arr = explode('\\', $className);
        if ($arr[0] == 'framework') {
            $basic_path = './'
    } else {
            $basic_path = './application/';
        }
        $sub_path = str_replace('/', '\\', $className);

        // 确定后缀
        if (substr($arr[count($arr) - 1], 0, 2) == 'I_') {
            $fix = '.interface.php';
        } else {
            $fix = '.class.php';
        }

        // 拼接类文件的地址
        $file = $basic_path . $sub_path . $fix;
        if (file_exists($file)) {
            require_once $file;
        }
    }

    public function initMCA()
    {
        // 接收请求参数 index?m=admin&c=&a=
        $m = isset($_GET['m']) ? $_GET['m'] : 'admin';
        define('MODULE', $m);
        $c = isset($_GET['c']) ? $_GET['c'] : 'Index';
        $a = isset($_GET['a']) ? $_GET['a'] : 'indexAction';

// 判断$a里面是否包含有Action
        if (strstr($a, -6) != 'Action') {
            $a .= 'Action';
        }

    }

    public function dispatch()
    {

// 加载控制器
        $controller_name = $c . 'Controller';
//$controller_file = './application/' . $m . '/controller/' . $controller_name . '.class.php';
//require_once $controller_file;
        $controller = new $controller_name;
        $controller->$a();
    }

    public function loadFrameworkConfig()
    {
        return require_once './framework/config/config.php';
    }

    public function loadCommonConfig()
    {
        $config = './application/common/config/config.php';
        if (file_exists($config)) {
            return require_once './framework/config/config.php';
        } else {
            return array();
        }
    }

    public function loadModuleConfig()
    {
        $config = './application/' . MODULE . '/config/config.php';
        if (file_exists($config)) {
            return require_once './framework/config/config.php';
        } else {
            return array();
        }
    }


}