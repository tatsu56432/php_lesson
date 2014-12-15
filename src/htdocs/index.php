<?php

//ファイルの読み書き

$testFile = "test.dat";

//$contents = file_get_contents($testFile);

//$contents = file_get_contents("http://dotinstall.com");

$contents = file($testFile);

var_dump($contents);
