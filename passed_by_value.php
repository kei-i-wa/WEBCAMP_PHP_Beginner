<?php

function myFnc(int $i){
    $i *= 2;
    echo "in myFunc,i is {$i} \n";
}

//値わたし
$i = 10;
myFnc($i);
//ここでの出力は１０になる
echo "i is {$i} \n";