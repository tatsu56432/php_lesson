<?php
//条件分岐(switch)

$signal = "yellow";

switch($signal) {
    case"red":
        echo "止まれ！";
        break;
    case"blue":
        echo "進め！";
        break;
    case"yellow":
        echo "注意！";
        break;
    default;
        //例外処理
        break;
}