<?php
$i=1;
echo "等しいかどうか";
var_dump($i ===1);
var_dump($i ===2);

echo "\n";
echo "ひとしくないかどうか \n";
var_dump($i !==1);
var_dump($i !==2);

echo "\n";
echo "等しいかどうか（文字列）\n";
$s = 'abc';
var_dump($s === 'abc');
var_dump($s === 'ABC');
var_dump($s === 'a');

//==と===の違い
echo "\n";
echo "==と===の違い　その１\n";
var_dump($i == 1);
var_dump($i === 1);

//違いその２
echo "\n";
echo "==と===の違い　その2\n";
var_dump($i == '1');
var_dump($i === '1');

// 2a問題の確認
echo "\n";
echo "2a問題の確認\n";
$i = 2;
var_dump($i == '2a');
var_dump($i === '2a');