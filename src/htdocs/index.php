<?php
//配列

$youbi = array("Sun","Mon","Tue","Wed","Thu","Fri","Sut");

//echo $youbi[2];

$youbi[]="追加";
$youbi[0]="Sunday";
unset($youbi[2]);

var_dump($youbi);

//addを追加しました。