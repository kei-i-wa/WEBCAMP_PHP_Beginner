<?php

$base_string ="Stollen;Panettone;Pandoro;Kouglof;Lussekatter";
echo "元の文字列 \n";
var_dump($base_string);

//他の言語でいうところのsplut ここではexplode
$explode_array = explode(";",$base_string);
var_dump($explode_array);

//joinでも良い　組み立て
$imploded_string = implode(",",$explode_array);
echo "\n implodeで繋げた文字列\n";
var_dump($imploded_string);