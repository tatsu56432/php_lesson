<?php

//ファイルの読み書き

$testFile = "test.dat";
$contents = "怒涛のコンツェルト";

if (is_writable($testFile)){
    //ファイルをオープンできたか？
    //$fp = fopen($testFile,"a");
    if(!$fp = fopen($testFile,"a")){
        echo"could not open!";
        exit;
    }
    //書き込めたか？
   if (fwrite($fp,$contents)===false){
       echo"could not write!";
       exit;
   }
    //終了処理
    echo "success!";
    fclose($fp);
}else{
    echo"not writable!";
    exit;
}


