<?php
// 开发一个DAO数据库操作类【oop,mysql,编程思想】
class DAOMySQLi
{
    // dao 有哪些属性
    private $_host;
    private $_user;
    private $_pwd;
    private $_dbname;
    private $_port;
    // 字符集
    private $_charset;
    // 一个mysqli对象实例
    private $_mysqli;
    // 有一个唯一实例的属性
    private static $_instance;

    // 构造函数,完成初始化
    private function __construct(array $option = array())
    {
        $this->_initOption($option);
        $this->_initMysqli();
    }

    // 通过传入的值完成成员属性的初始化
    private function _initOption($option)
    {
        // var_dump($option);
        // 将传入的数组 $option 的值,赋给成员属性
        $this->_host    = isset($option['host']) ? $option['host'] : '';
        $this->_user    = isset($option['user']) ? $option['user'] : '';
        $this->_pwd     = isset($option['pwd']) ? $option['pwd'] : '';
        $this->_dbname  = isset($option['dbname']) ? $option['dbname'] : '';
        $this->_port    = isset($option['port']) ? $option['port'] : '3306';
        $this->_charset = isset($option['charset']) ? $option['charset'] : 'utf8';
    }

    // 完成mysqli对象的初始化
    private function _initMysqli()
    {
        // 判断输入是否为空,否则连接数据库,是则退出
        if ($this->_host && $this->_user && $this->_dbname) {
            // 输入不为空,则给成员变量赋值
            $this->_mysqli = new mysqli($this->_host, $this->_user, $this->_pwd, $this->_dbname, $this->_port);
            // 连接数据库
            if ($this->_mysqli->connect_errno) {
                die('数据库连接失败,错误信息是: ' . $this->_mysqli->connect_error);
            } else {
                // echo '数据库连接成功!<br>';
                // 设置字符集
                $this->_mysqli->set_charset($this->_charset);
            }
        } else {
            die('host,user,dbname 都不能为空');
        }
    }

    // 防止克隆
    private function __clone()
    {
    }

    // 对外提供一个静态的pubic方法,可以返回一个唯一的对象实例
    public static function getSingleton(array $option = array())
    {
        // 如果还没有创建这个对象实例
        if (!(self::$_instance instanceof self)) {
            // 创建对象实例,这里就是构造函数
            self::$_instance = new self($option);
        }
        // 返回对象实例
        return self::$_instance;
    }

    // 对外提供一个方法(接口),完成单条记录查询任务(select)
    public function fetchRow($sql = '')
    {
        // 为了立即释放$res; 并将结果返回给调用文件使用
        $arr = array();
        $res = $this->_mysqli->query($sql);
        // var_dump($res);
        if ($row = $res->fetch_assoc()) {
            $arr = $row;
        }
        //立即释放$res 结果集
        $res->free();
        return $arr;
    }

    // 对外提供一个方法(接口),完成查询任务(select)
    public function fetchAll($sql = '')
    {
        // 为了立即释放$res; 并将结果返回给调用文件使用
        // 将 $res 记录到数组中,将数组返回
        $arr = array();
        $res = $this->_mysqli->query($sql);
        // var_dump($sql);
        // var_dump($res);
        while ($row = $res->fetch_assoc()) {
            $arr[] = $row;
        }
        //立即释放$res 结果集
        $res->free();
        return $arr;
    }

    // 对外提供一个方法(接口),完成dml操作
    public function query($sql = '')
    {
        $res = $this->_mysqli->query($sql);
        if ($res) {
            return $res;
        } else {
            echo $this->_mysqli->error . '<br>';
            echo '执行sql语句失败,错误信息是 ' . $this->_mysqli->error . '<br>';
        }
    }

}
