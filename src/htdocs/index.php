<?php
//配列に関するループ

$youbi = array("Sun","Mon","Tue",);
$sales = array("tanaka"=>150,"nakajima"=>200);

//foreach

/*
foreach($youbi as $y){
    echo $y;
}
*/

foreach($sales as $name => $mount){
    echo $name, $mount;

    
}
