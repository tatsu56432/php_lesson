<?php
//関数
//ローカル変数(変数のスコープ)
$myname = "ruby";

function sayHi($name="sakuragi"){
    $myname = "php";
    return "hi!$name from $myname";
}

echo sayHi();

echo $myname;
