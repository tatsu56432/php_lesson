<?php
//条件分岐
//比較演算子　<> <= => == !=
// &&(AND) ||(OR) !(NOT)
$age = 20;
/*
if($age > 20 ){
    $message = "大人！";
}else{
    $message = "子供！";
}
*/
$message = ($age > 20) ? "大人！":"子供！";
