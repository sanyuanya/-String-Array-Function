<?php

/*

 * 作用：删除字符串左边的空格或其他预定义字符
 * ltrim(string,charlist)
 * 参数：
 * string     需要处理的字符串
 * charlist   可选，规定要从字符串中删除哪些字符，如果为空，则移除以下所有字符"\0" -- NULL,"\t" -- 制表符,"\n" -- 换行,"\x0B" -- 垂直制表符,"\r" -- 回车," " -- 空格
 *  */

$str = "%hanjie ";
echo ltrim($str,'%');

//删除右边的rtrim  或  chop

