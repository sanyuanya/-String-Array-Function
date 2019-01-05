<?php
/*
返回在指定字符前添加反斜杠的字符串
 * 参数	描述
string 	必须，规定要转义的字符串。
characters  	必须，规定要转义的字符或字符范围。    

 说明：返回已转义的字符串。
 *  */
$j = "hanjie";
echo addcslashes($j,'h');

