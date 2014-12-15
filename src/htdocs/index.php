<?php
//条件分岐
//比較演算子　<> <= => == !=
// &&(AND) ||(OR) !(NOT)
$age = 10;
if($age > 20 ){
    echo "成人式！";
}elseif($age > 12){
    echo "子供";
}else{
    echo "幼児";
}
/*
HTMLの中に書くときにhtmlと混じって煩わしいときに使う
if () :
else:
endif:
*/