<?php

//関数の外側　グローバル
$a = 10;
echo "global:a is {$a}\n";

//関数の宣言
function myfunc(){
    $b = 999;
    echo "in function: b is {$b}\n";
    //関数の外側で使用している変数を関数の中では使えない
    echo "in function:a is {$a} \n";
}

myfunc();