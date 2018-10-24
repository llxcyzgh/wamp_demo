<?php
namespace framework\core;

class Factory
{
    public static function M($modleName)
    {
        static $model_list = array();
        if (!isset($model_list[$modleName])) {
            $model_list[$modleName] = new $modleName;
        }
        return $model_list[$modleName];
    }
}