<?php
header("content-type:text/html;charset=utf-8");
/*
■ unique(唯一)
字段名 字段类型 unique

当定义了唯一约束后，该列值是不能重复的。

 */
/*
unique 细节(注意):
(1)、如果没有指定not null,则unique字段可以为null,而且能够可以有多个null
(2)、如果指定了not null,则unique字段不能为null,也不能重复
(2)、一张表可以有多个unique
 */
