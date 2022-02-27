<?php

$file_name = __FILE__;
//ファイル全体の読み込み
$file_string = file_get_contents($file_name);

var_dump($file_string);