<?php
//文字列に関する関数
//日本語に対応させる

$s = "あいうえお";

//strlen
//echo mb_strlen($s);

//strpos
//echo mb_strapos($s,"う");

//substr
echo mb_substr($s,-2,2);

//str_replace
//echo str_replace("abc","ABC",$s);
