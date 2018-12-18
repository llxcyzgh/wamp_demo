<?php
header("content-type:text/html;charset=utf-8");
/*
count
count(*) 和 count(列名)的区别 ?
count(*) 统计的是所有有记录的行数和,
count(列名) 统计该列不为null的行数和
 */

/*
sum
select sum(chinese) as '语文总分' from student2;//统计语文总成绩,其中,as 和 语文部总分的引号可以省略

尽量使用 select sum(chinese)+sum(math)+sum(english) form student2; 而不是 select sum(chinese+math+english) from student2; 因为如果某行的某列存在null值,第二种方法会直接忽略该行的其它值,计算时全计为0
 */

/*
avg
select round(sum(chinese)/count(chinese),2) from student2;// mysql的四舍五入取小数的函数是round
select avg(chinese) from student2;

avg 统计的是  除null以外的数的和/除null以外数的个数
 */

/*
max 和 min
返回满足where条件的一列的最大/最小值

 */
