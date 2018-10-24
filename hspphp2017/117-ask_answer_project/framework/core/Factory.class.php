<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/8
 * Time: 11:21
 * 工厂类,功能是根据用户传递的模型类,返回单例的模型对象
 */

namespace framework\core;
class Factory
{
    // 定义公共的静态的方法
    public static function M($modelName)
    {
        // 1. 先判断模型中是否含有Model关键字,例如GoodsModel
        if (substr($modelName, -5) != 'Model') {
            $modelName .= 'Model';
        }

        // 2.模型中是否含有命名空间,命名空间的语法是:\
        if (!strstr($modelName, '\\')) {
            // 不为false,则说明存在'/',也就是存在命名空间,直接下一步实例化
            // 为false,则说明不存在'/',也就是不存在命名空间,自己拼接完再下一步实例化
            $modelName = MODULE . '\model\\' . $modelName;
        }

        static $model_list = array();// 或者在函数外创建该静态变量
        // $model_list = [];
        if (!isset($model_list[$modelName])) {
            $model_list[$modelName] = new $modelName;
        }
        return $model_list[$modelName];
    }

}

