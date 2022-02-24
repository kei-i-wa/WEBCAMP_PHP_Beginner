<?php


$i = random_int(1,999);
$j = random_int(1,999);

//加算
$k = $i + $j;
echo "{$i} + {$j} = {$k} \n";


//ゲンさん
$k = $i - $j;
echo "{$i} - {$j} = {$k} \n";

//かけざん
$k = $i * $j;
echo "{$i} * {$j} ={$k} \n";

//割り算
$k = $i / $j;
echo "{$i} / {$j} = {$k}\n";

//あまり
$k = $i % $j;
echo "{$i} % {$j} =$k}\n";

$k = $i **3;
echo "{$i}**3 ={$k}\n";

$k = pow($i, 3);
// 結果の出力
echo "pow({$i}, 3) = {$k} \n";
