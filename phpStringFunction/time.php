<?php

header("content-type:text/html;charset=utf8");

/*
 *time()函数语法
 * 作用：返回当前时间的unix时间戳
 * 语法：time()
 * 参数：time()函数仅返回当前时间您时间戳，没有参数
 * 说明：返回自从您纪元(格林威治时间1970年1月1日00：00：00)到当前时间的秒数
 *  */
$i = time();
echo "当前时间".date("Y-m-d H:i:s",$i);

?>

