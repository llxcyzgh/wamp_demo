<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/8
 * Time: 11:21
 * 基础模型类,各个模型类中公共的代码
 */

namespace framework\core;

//use framework\dao\DAOPDO;// 直接use使用DAOPDO类
use framework\dao\DAOPDO;

class Model
{
    protected $dao;
    protected $true_table;// 真实表名
    protected $pk;// 主键字段

    public function __construct()
    {
        // 初始化dao对象
        $this->initDAO();
        // 初始化真实表名
        $this->initTrueTable();
        // 初始化数据表的字段
        $this->initField();
    }

    // 初始化dao对象
    public function initDAO()
    {
        // 连接数据库
        $option    = $GLOBALS['config'];
        $this->dao = DAOPDO::getSingleton($option);
    }

    // 初始化 表名
    public function initTrueTable()
    {
        $this->true_table = '`' . $GLOBALS['config']['table_prefix'] . $this->logic_table . '`';
    }

    // 初始化数据表的字段
    public function initField()
    {
        $sql    = "DESC $this->true_table";
        $result = $this->dao->fetchAll($sql);
        foreach ($result as $key => $value) {
            if ($value['Key'] == 'PRI') {
                // 说明 $value['Field'] 是主键字段
                $this->pk = $value['Field'];
                break;
            }
        }
    }

    /**自动插入数据
     * 参数:数组(字段名称=>字段值)
     * $data = array('goods_name' => 'xiaomi6');
     * @return mixed 返回刚刚插入的这条记录的主键值
     */
    public function insert($data)
    {
        // 拼接成完整的sql语句,并执行
        // 1.拼接上表名部分
        $sql = "INSERT INTO $this->true_table";

        // 2.拼接上字段列表部分
        $fields     = array_keys($data);
        $fields     = array_map(function ($v) {
            return '`' . $v . '`';
        }, $fields);
        $field_list = '(' . implode(',', $fields) . ')';
        // 3.拼接上值列表部分
        $values = array_values($data);
        // 安全处理,插入数据前,将引号转义并包裹
        $values     = array_map(array($this->dao, "quote"), $values);
        $value_list = ' VALUES(' . implode(',', $values) . ')';
        $sql        = $sql . $field_list . $value_list;

        // 4.执行sql语句,并返回主键值
        $this->dao->exec($sql);
        return $this->dao->lastInsertID();
    }

    /**自动删除
     * 参数: 删除的记录的主键值
     * 最终: 根据主键删除记录
     */
    public function delete($id)
    {
        // 拼接上条件部分[先对条件进行安全处理], 并执行
        $id  = $this->dao->quote($id);
        $sql = "DELETE FROM {$this->true_table} WHERE `{$this->pk}` = {$id}";
        return $this->dao->exec($sql);
    }

    /**自动更新数据
     * 参数1:更新的字段和值关联关系; 例如: $data = array('goods_name' => 'xiaomi6','goods_price' => 1288);
     * 参数2:必须要有where条件; 例如: array('goods_id' => 100)
     * 最终: UPDATE 表名 SET `字段1`='值1',`字段2`='值2' WHERE `字段名`='字段值';
     * 最终: UPDATE `ecs_goods` SET `goods_name`='红米3',`goods_price`='999' WHERE `goods_id`='100';
     */
    public function update($data, $where = null)
    {
        // 0.对传入的数据[值,不包括字段]先进行安全处理[这里是两个数组]
        $data  = array_map(array($this->dao, "quote"), $data);
        $where = array_map(array($this->dao, "quote"), $where);
        // 1.先判断是否有条件
        if (!$where) {
            // 没有条件,直接停止
            return false;
        } else {
            // 拼接条件
            $where_arr = array();
            foreach ($where as $key => $value) {
                $where_arr[] = " `{$key}` = {$value} ";
            }
            $where_str = ' WHERE ' . implode(' and ', $where_arr);
        }

        // 2.加入要更新的内容[字段和值]
        $set_arr = array();
        foreach ($data as $key => $value) {
            $set_arr[] = " `{$key}` = {$value} ";
        }
        $set_content = implode(' , ', $set_arr);
        $sql         = "UPDATE {$this->true_table} SET {$set_content} {$where_str}";
        var_dump($sql);
//        die;

        // 3.执行sql语句,并返回主键值
        $row = $this->dao->exec($sql);
        echo '<hr> 受影响的记录的条数为: ' . $row . '<hr>';
        return $this->dao->lastInsertID();
    }

    /**自动查询数据[单条记录和多条记录]
     * 参数1:查询的字段列表; $data = array('goods_name','goods_price')
     * 参数2:查询的where条件; 例如: array('goods_id' => 100,'goods_name' => '小米6')
     * 最终: SELECT `字段1`,`字段2` FROM 表名 WHERE `字段名`='字段值';
     * 最终: UPDATE `ecs_goods` SET `goods_name`='红米3',`goods_price`='999' WHERE `goods_id`='100' and `goods_name`='小米6';
     */
    public function find($data = array(), $where = array())
    {
        // 1.先判断是否有字段
        if (!$data) {
            // 没有字段列表
            $fields = ' * ';
        } else {
            // 有字段列表
            $fields = array_map(function ($v) {
                return '`' . $v . '`';
            }, $data);
            $fields = implode(',', $fields);
        }

        // 2.确定查询条件
        if (!$where) {
            // 没有where条件,查询所有数据
            $sql = "SELECT {$fields} FROM {$this->true_table}";
            return $this->dao->fetchAll($sql);
        } else {
            // 根据条件查询,返回一条数据[先对条件数组进行安全处理]
            $where     = array_map(array($this->dao, "quote"), $where);
            $where_str = '';
            foreach ($where as $key => $value) {
                $where_str .= ' `' . $key . '` = ' . $value . ' AND ';
            }
            $where_str = substr($where_str, 0, -5);
            $sql       = "SELECT {$fields} FROM {$this->true_table} WHERE $where_str";
            var_dump($sql);
//            $res = $this->dao->fetchRow($sql);
//            var_dump($res);
//            die;
            return $this->dao->fetchRow($sql);
        }
    }


}

