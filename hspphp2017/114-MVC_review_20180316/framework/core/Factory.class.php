<?php

/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/16
 * Time: 9:43
 */

namespace framework\core;
class Factory
{
    public static function M($modelName)
    {
        static $model_list = array();
        if (!isset($model_list[$modelName])) {
            $model_list[$modelName] = new $modelName;
        }
        return $model_list[$modelName];
    }
}