<?php
header("content-type:text/html;charset=utf8");

/*
 * 作用：把查询字符串解析到变量中
 * 语法：parse_str(string,array);
 * 参数：
 * string       必须，规定要解析的字符串
 * array        可选，规定存储变量的数组名称，该参数表示变量将存储到数组中
 * 说明：如果未设置array参数，则由该函数设置的变量将覆盖已存在的同名变量。php.ini文件中的magic_quotes_gpc 设置影响该函数的输出，如果已经启用，那么在parse_str()解析之前，变量会被addslashes()转换
 * 
 *  */

parse_str("id=23&name=JoHn Adams",$myArray);
print_r($myArray);

