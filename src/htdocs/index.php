<?php

//日付や時間に関する関数

//Unixタイムスタンプ

var_dump(time());

var_dump(mktime(20,00,0,12,15,2014));// 2014/12/15 20:00:00
var_dump(strtotime("2014/12/15 20:00:00"));
var_dump(strtotime("last Sunday"));
var_dump(strtotime("+2 days"));
var_dump(strtotime("2014/12/17 19:32:00"));


