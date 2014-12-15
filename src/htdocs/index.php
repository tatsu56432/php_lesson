<?php
//文字列に関する関数
//printf

$s = "banana";
$n = 40;
$p = 5.23;

//"We have  40 bananas for $5.23"

//printf("We have %5d %ss for $%.2f",$n,$s,$p);

$result = sprintf("We have %5d %ss for $%.2f",$n,$s,$p);

echo $result;