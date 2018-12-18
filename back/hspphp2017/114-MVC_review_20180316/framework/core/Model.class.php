<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/3/16
 * Time: 8:37
 */

namespace framework\core;
// 基础模型类,封装的是所有模型的公共的方法
class Model
{
    protected $dao;
    protected $true_table;
    protected $pk;// primary key [表的结构,从 desc 表名获得]

    public function __construct()
    {
        // 初始化dao对象
        $this->initDAO();
        // 获得当前操作的真实表名[前缀+逻辑表名]
        $this->initTrueTable();
        // 获得当前字段信息,提取主键
        $this->initField();
    }

    private function initDAO()
    {
        $option    = array(
            'host' => 'localhost'
        );
        $this->dao = DAOPDO::getSingleton($option);
    }

    private function initTrueTable()
    {
        $this->true_table = '`' . $GLOBALS['config']['table_prefix'] . $this->logic_table . '`';
    }

    private function initField()
    {
        $sql    = "DESC $this->true_table";
        $result = $this->dao->fetchAll($sql);
        foreach ($result as $value) {
            if ($value['Key'] == 'PRI') {
                $this->pk = $value['Field'];
                break;
            }
        }
    }

    // 自动插入数据 "INSERT INTO `表名`(字段1,字段2) VALUES('值1','值2')"
    // $data = array('goods_name'=>'oneplus3t','goods_price'=>2000);
    public function insert($data)
    {
        // 先进行值部分[不对索引,即字段进行]安全处理
        $data      = array_map(array($this->dao, "quote"), $data);
        $field_str = '';
        $value_str = '';
        foreach ($data as $key => $value) {
            $field_str .= '`' . $key . '`,';
            $value_str .= $value . ',';
        }
        $field_str = ' (' . substr($field_str, 0, -1) . ') ';
        $value_str = ' (' . substr($value_str, 0, -1) . ')';
        $sql       = 'INSERT INTO ' . $this->true_table . $field_str . ' VALUES ' . $value_str;
        $this->dao->exec($sql);
        return $this->dao->lastInsetId();


    }
    // 自动删除数据 "DELETE FROM `表名` WHERE 主键 = $id"
    // $id = 64;
    public function delete($id)
    {
        // 安全处理
        $id  = $this->dao->quote($id);
        $sql = "DELETE FROM  {$this->true_table} WHERE  {$this->pk} = {$id}";
        return $this->dao->exec($sql);
    }

    // 自动更新数据 "UPDATE 表名 SET 字段名=值,字段名=值 WHERE 字段名=值"
    public function update($data, $where = null)
    {
        if (!$where) {
            return false;
        } else {
            $where     = array_map(array($this->dao, "quote"), $where);
            $where_str = '';
            foreach ($where as $key => $value) {
                $where_str .= '`' . $key . '`=' . $value . ' AND ';
            }
            $where_str = substr($where_str, 0, -4);
        }

        $data     = array_map(array($this->dao, "quote"), $data);
        $data_str = '';
        foreach ($data as $key => $value) {
            $data_str .= '`' . $key . '`=' . $value . ',';
        }
        $data_str = substr($data_str, 0, -1);

        $sql = "UPDATE {$this->true_table} SET $data_str WHERE $where_str";
        return $this->dao->exec($sql);
    }

    // 自动查询数据
    public function find()
    {

    }
}