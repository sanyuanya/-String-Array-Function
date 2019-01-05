<?php
/*
 * 作用：把字符串分割到数组中
 * 语法：str_split(string,length)
 * 参数
 * string       必须，要分割的字符串
 * length       可选，规定每个数组的长度，默认为1，如果length小于1 ，则返回false，如果length大于当前字符串的长度，则整个字符串将作为数组的唯一元素返回
 * 说明：将字符串按规定长度分割成数组
 
 *  */

$i = "helloeord";
$j = str_split($i,3);
print_r($j);

