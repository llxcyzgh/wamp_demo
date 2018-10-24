<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 2018/2/3
 * Time: 23:40
 */

class Page
{
    // 成员属性
    private $total_rows = 100; // 数据库总的记录数
    private $pagesize = 6; // 每页显示多少条记录
    private $now_page = 2; // 当前是第几页
    private $url = ''; // 跳转的页面地址(不同的项目跳转时的地址不一样)
    private $search = '';

    // 提供set、get方法赋值、读取值
    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
    }

    // 开始动态创建分页导航
    public function create()
    {
        // 定义首页的导航按钮
        // 先计算出有多少页(ceil(100/6)) 向上取整
        $page_count = ceil($this->total_rows / $this->pagesize);
        $first_active = $this->now_page == 1 ? 'active' : '';
        $class_prev = $this->now_page <= 2 ? 'hidden' : '';
        $class_next = $this->now_page >= $page_count-1 ? 'hidden' : '';
        $href_prev = $this->now_page - 1;
        $href_next = $this->now_page + 1;
        $url = $this->url . '?page=';
        $search = ($this->search==='')?'':'&search='.$this->search;
        $page = <<<_END
            <ul class="pagination">
            <li class="$first_active"><a href="{$url}1{$search}">首页</a></li>
            <li class="$class_prev"><a href="{$url}{$href_prev}{$search}">上一页</a></li>
_END;
        // 中间是动态生成的导航按钮
        for ($i = $this->now_page - 3; $i <= $this->now_page + 3; $i++) {
            if ($i < 2 || $i > $page_count - 1) {
                continue;
            }
            $active = $this->now_page == $i ? 'active' : '';
            $page .= <<<_END
                <li class="$active"><a href="{$url}{$i}{$search}">{$i}</a></li>
_END;
        }
        // 定义尾页的导航按钮
        $last_active = $this->now_page == $page_count ? 'active' : '';
        $page .= <<<_END
            <li class="$class_next"><a href="{$url}{$href_next}{$search}">下一页</a></li>
            <li class="$last_active"><a href="{$url}{$page_count}{$search}">尾页</a></li>
            </ul>
_END;
        return $page;
    }

}