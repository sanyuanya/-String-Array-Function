<?php
/*
 * 作用：随机的打乱字符串中所有字符
 * 语法：str_shuffle(string)
 * 参数
 * string  必须，规定要打乱的字符串
 * 说明 ：返回已打乱的字符串
 * 
 *  */
$str = "hello world";
echo str_shuffle($str);
