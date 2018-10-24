<?php
header("content-type:text/html;charset=utf-8");
/*
要求:
1. 编写一个银行账号类(属性有 账号,密码,开户名,余额)
2. 账号是公开的,开户名是保护的,密码和余额是私有的.初始密码是 123456
3. 银行账号可以 存钱(需要提供账号和密码),取钱(需要提供账号和密码),显示余额(需要提供账号和密码),显示开户名,修改密码(需要提供账号和密码)
 */

class BankAcount
{
    public $account_number;
    protected $account_name;
    private $account_password = 123456;
    private $account_balance  = 0.0;

    public function __construct($account_number, $account_name)
    {
        $this->account_number = $account_number;
        $this->account_name   = $account_name;
    }

    public function saveMoney($acc, $psw, $money)
    {
        if ($acc == $this->account_number && $psw == $this->account_password) {
            $this->account_balance += $money;
            echo '本次存入 ' . $money . ' 元,总计余额为 ' . $this->account_balance . ' 元<br>';
        } else {
            echo '***** 账号或密码不正确,不能存钱 *****<br>';
        }
    }

    public function withdraw($acc, $psw, $money)
    {
        if ($acc == $this->account_number && $psw == $this->account_password) {
            $this->account_balance -= $money;
            echo '本次取出 ' . $money . ' 元,总计余额为 ' . $this->account_balance . ' 元<br>';
        } else {
            echo '***** 账号或密码不正确,不能取钱 *****<br>';
        }
    }

    public function displayBalance($acc, $psw)
    {
        if ($acc == $this->account_number && $psw == $this->account_password) {
            echo '总计余额为 ' . $this->account_balance . ' 元<br>';
        } else {
            echo '***** 账号或密码不正确,不能查询 *****<br>';
        }
    }

    public function changePassword($acc, $psw, $psw_change)
    {
        if ($acc == $this->account_number && $psw == $this->account_password) {
            $this->account_password = $psw_change;
            echo '密码修改为 ' . $this->account_password . '<br>';
        } else {
            echo '***** 账号或密码不正确,不能查询 *****<br>';
        }
    }

    public function __get($pro_name)
    {
        if ($this->$pro_name == $this->account_name) {
            return $this->$pro_name;
        }
    }

}

$acount1 = new BankAcount('6228480010517222111', 'zjh');

var_dump($acount1);

$acount1->saveMoney('6228480010517222111', 123456, 1000);
$acount1->saveMoney('6228480010517222111', 1234056, 1000);
$acount1->saveMoney('6228480010517222111', 123456, 5000);
$acount1->withdraw('6228480010517222111', 123456, 1000);
$acount1->withdraw('6228480010517222111', 1234056, 1000);
$acount1->displayBalance('6228480010517222111', 123456);
$acount1->changePassword('6228480010517222111', 123456, 654321);
$acount1->withdraw('6228480010517222111', 654321, 1000);

echo '用户名为: ' . $acount1->account_name;
