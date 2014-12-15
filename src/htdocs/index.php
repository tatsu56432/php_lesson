<?php
//ループ（while）
$i=0;
//ループ(for/while)

//break; continue;
/*
for($i=0 ; $i < 10 ; $i++ ){
    if($i>5){
        break;
    }
echo $i;
}
*/

for($i = 0 ; $i < 10 ; $i++){
    if($i % 2 == 0){
        continue;
    }
    echo $i;
}