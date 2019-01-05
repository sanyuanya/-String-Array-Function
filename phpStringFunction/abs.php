<?php
/*
  作用：abs()函数的作用是返回一个书的绝对值
 * 语法：abs(number)
 * 参数：number 必须，是一个数
 * 说明：返回参数的绝对值，如果参数是float 则返回的类型也是float ，如果参数是int ，返回的类型是int ，如果参数是string字符串，则返回0
 *  */
$i = -100;
$j = abs($i);
//echo $j;
$a = 6.7;
$b = abs($a);
//echo $b;
$k = "hello world";
$c = abs($k);
echo $c;



