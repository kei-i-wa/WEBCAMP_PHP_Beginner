<?php
//初めに0,1があります。
$array = [0,1];
//次の値はそれを足したもの
//次の配列のkeyを変数iに
$i=2;
//valueの初期値　10000超えたらやめる
$v=0;
while($v<=10000){
    $array[$i]=$array[$i-2] + $array[$i-1];
    $v=$array[$i];
    $i+=1;
}

//配列に格納されてる値の出力
foreach($array as $value){
    echo "{$value}\n";
}

//Memo iwasaki
//順に配列作って、自身の前と前の前にある値を足させる
//初期でセットする
//[0][1]
//1　配列key:2のvalueに配列key 0,1の値を足したvalueを
//[0][1][1]
//2　配列key:3のvalueに配列key1,2の値を足したvalueを
//[0][1][1][2]
