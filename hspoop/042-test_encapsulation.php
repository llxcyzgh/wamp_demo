<?php
header("content-type:text/html;charset=utf-8");
// 封装案例

class Clerk
{
    public $name;
    protected $job;
    private $salary;

    public function __construct($name, $job, $salary)
    {
        $this->name   = $name;
        $this->job    = $job;
        $this->salary = $salary;
    }

    // 提供一个函数,来访问job
    public function getJob($psw)
    {
        if ($psw == 123) {
            return $this->job;
        } else {
            return '密码错误, 没有查看的权限';
        }
    }
}

$clerk1 = new Clerk('老王', 'php项目经理', 23000.45);
echo '员工姓名是: ' . $clerk1->name . '<br>';
echo '员工job是: ' . $clerk1->getJob(1) . '<br>';
