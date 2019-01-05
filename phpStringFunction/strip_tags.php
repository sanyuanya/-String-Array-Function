<?php

/*
剥去html标签
 * 参数
 * string    必须 要处理的字符串
 * allow     可选 ，要保留的标签
 * 
 *  */
$i = strip_tags("<p>niubi<i>hanjie</i></p>","<i>");
echo $i;

