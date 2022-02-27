<?php

$file_name = __FILE__;
//ファイルのオープン
$file_obj = new SplFileObject($file_name);

//各行を読み込んで出力
foreach($file_obj as $no => $line){
    echo "{$no}:$line";
}