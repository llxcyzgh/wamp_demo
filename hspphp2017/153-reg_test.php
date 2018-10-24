<?php
// 打到str中的问题标题

$str = <<<_END
<div itemprop="zhihu:question" itemtype="http://schema.org/Question" itemscope="" data-reactid="578"><meta itemprop="url" content="https://www.zhihu.com/question/30030792" data-reactid="579"><meta itemprop="name" content="刮痧是伪科学吗？" data-reactid="580"><a target="_blank" data-za-detail-view-element_name="Title" href="/question/30030792/answer/330550129" data-reactid="581">刮痧是伪科学吗？</a></div>
_END;

$reg = '/^<div itemprop="zhihu:question".*>.*<a.*?>(.+?)<\/a><\/div>$/';
//$reg = '/^<div.*?<\/div>/';

preg_match($reg, $str, $match);
var_dump($match);

