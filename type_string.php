<?php

$s = "Hello";
var_dump($s);

//その中の一文字にアクセス
echo $s[2],"\n";

//マルチバイト
//ひらがなは３バイトカウントなのでうまくいかない
$multi_string = "あいうえお";
var_dump($multi_string);
echo $multi_string[0],"\n";

$num_i=123;
$num_s ="123";
var_dump($num_i);
var_dump($num_s);

//シングルとダブルの違い
$double_s = "num is {$num_i} \n";
$single_s = 'num is {$num_i} \n';
var_dump($double_s);
var_dump($single_s);
