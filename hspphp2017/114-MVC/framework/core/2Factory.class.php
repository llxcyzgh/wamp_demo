<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/8
 * Time: 11:21
 * 工厂类,功能是根据用户传递的模型类,返回单例的模型对象
 */

class Factory
{
    protected static $model_list = array();// 或者在函数内创建该静态变量
    // 定义公共的静态的方法
    public static function M($model_name)
    {
        // $model_list = [];
        if (!isset(self::$model_list[$model_name])) {
            self::$model_list[$model_name] = new $model_name;
        }
        return self::$model_list[$model_name];
    }
}

/*class UserModel
{

}

$m1 = Factory::M('UserModel');
$m2 = Factory::M('UserModel');
$m3 = Factory::M('UserModel');
var_dump($m1, $m2, $m3);*/

/* protected $dao;

 public function __construct()
 {
     require_once 'DAOPDO.class.php';
     $option = array(
         'host' => 'localhost',
         'user' => 'root',
         'password' => '',
         'dbname' => 'php_7',
         'port' => '3306',
         'charset' => 'utf8'
     );
     $this->dao = DAOPDO::getSingleton($option);
 }*/