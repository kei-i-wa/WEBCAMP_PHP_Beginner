<?php
$awk = [123];
var_dump($awk);

$awk2 = [999,"HELLO",3.14];
var_dump($awk2);

var_dump( $awk2[0] );

//要素の書き換え
$awk2[0] = 654321;
var_dump( $awk2[0] );


//要素の追加
$awk[] = 1.41421345;
$awk[] = "string value";
var_dump($awk);

