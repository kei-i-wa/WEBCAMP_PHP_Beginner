<?php

$array = [
    "Key1"=>"hello",
    0   =>  '1st',
    1   =>   '2nd',
    "Key2"=>3.14,
    ];
    
//foreachで処理する
foreach($array as $k => $v){
    echo "{$k} -> {v} \n";
}

//foreachで処理　値のみを受け取る書き方
echo "\n";
foreach($array as $value){
    echo "{$value}\n";
}