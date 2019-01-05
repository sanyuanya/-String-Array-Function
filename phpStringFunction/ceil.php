<?php
header("content-type:text/html;charset=utf8");
/*
 *ceil()函数的作用是向上舍入为最接近的整数
 * ceil(number)
 * 参数 number 必须，是一个数
 * 说明：返回不小于参数X的下一个整数，如果没有小数，返回参数X，如果有小数部分则舍去小数部分，向前进一位，注意不是四舍五入，当参数是string字符串时，则返回0
 *  */
$h = 101;
$h = ceil($h);

//echo $h;
$j = 99.4;
$j = ceil($j);
//echo $j;
$i = -99.4;
$i = ceil($i);
//echo $i;

$k = "hello world";
$k = ceil($k);
echo $k;


