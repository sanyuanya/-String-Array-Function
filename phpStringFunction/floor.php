<?php
/*
 *作用:向下舍入为最接近的整数 
 *语法：floor(number)
 * 参数 number 必须，是一个数
 * 说明：返回不大于参数number的下一个整数，有小数部分则直接社区取整
 *  */

$i = 66.7;
$i = floor($i);
//echo $i;
$j = -66.7;
$j = floor($j);
echo $j;
