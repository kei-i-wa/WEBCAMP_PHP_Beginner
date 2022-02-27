<?php

$file_name = __DIR__ . "/data.csv";

$file_obj = new SplFileObject($file_name);
//ファイルをCSVとして読み込む
$file_obj->setFlags(SplFileObject::READ_CSV);

//1レコード分出力
foreach($file_obj as $no => $datum){
    var_dump($datum);
}