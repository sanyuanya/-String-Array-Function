<?php
/*
 * 作用:按照指定长度对字符串进行拆行处理
 * 语法:wordwrap(string ,width,break,cut)
 * 参数：
 * string       必须，规定要进行拆行的字符串
 * width        可选，规定最大行宽度，默认是75
 * break        可选，规定作为分隔符使用的字符(字符串断开字符)，默认是"\n"
 * cut          可选，规定是否对大于指定宽度的单词进行拆行：false --默认 ，no-wrap。true--拆行
 * 说明：若函数成功拆行，则返回拆行后的字符串，如果失败，则返回false
 * 
 *  */
$i = "I love programming .It's fun.";
$j = wordwrap($i,11,"<br>\n",true);
echo $j;

