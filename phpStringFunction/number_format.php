<?php
header("content-type:text/html;charset=utf8");
/*
 * 作用：通过千位分组来格式化数字
 * 语法：number_format(number,decimals,decimalpoint,separator)
 * 参数：
 * number       必须。规定要格式化的数字
 * decimals     可选，规定多少个小数，如果设置了该参数，则使用点号(.) 作为小数点来格式化数字
 * decimalpoint 可选，规定用作小数点的字符串
 * separator    可选，规定用作千位分隔符的字符串，仅使用该参数的第一个字符，比如"XXX"仅输出"X" .如果设置了该参数，那么其他的参数都是必须的
 * 说明：该函数支持一个、两个或四个参数(不是三个)。如果除了参数number外未设置其他参数，则数字被格式化为不带小数点且以逗号(,)作为千位分割符
 *  */
//$i = 4999.9;
//$j = number_format($i);
//echo "不带参数时输出".$j;
$i = 5000;
$j = number_format($i,2,'.',',');//设置参数，规定由两位小数
 echo "带参数时输出".$j;

