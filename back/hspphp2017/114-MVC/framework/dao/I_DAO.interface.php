<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/5
 * Time: 17:22
 */

namespace framework\dao;
interface I_DAO
{
    // 查询一条记录的方法
    public function fetchRow($sql);

    // 查询所有记录的方法
    public function fetchAll($sql);

    // 查询一个字段的值
    public function fetchColumn($sql);

    // 执行增删改的操作
    public function exec($sql);

    // 引号转义并包裹的方法
    public function quote($str);

    // 查询最新插入的单条数据的主键
    public function lastInsertId();
}