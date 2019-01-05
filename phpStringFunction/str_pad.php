<?php


/*
作用：把字符串填充到指定的长度
 * 语法：str_pad(string,length,pad_string,pad_type)
 * 参数：
 * string	必须，规定要填充的字符串，
 * length	必须，规定新的字符串长度，如果该值小于字符串的原始长度，则不做任何操作。
 * pad_string	可选，规定填充使用的字符串，默认是空白。
 * pad_type	可选，规定填充字符串哪边，STR_PAD_BOTH -- 填充字符串的两侧，如果不是偶数，则右侧获得额外的填充。STR_PAD_LEFT -- 填充字符串的左侧。STR_PAD_RIGHT -- 填充字符串的右侧，默认。
 *  */

$str = "hanjie";
var_dump(str_pad($str,11,1,STR_PAD_BOTH));

