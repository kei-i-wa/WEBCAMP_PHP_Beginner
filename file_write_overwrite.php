<?php
// ファイル名の把握
$file_name = __DIR__ . "/file_write_overwrite.txt";

// ファイルに書き込む内容
$write_string = "書き込む内容 \n";

// ファイルに書き込む
file_put_contents($file_name, $write_string);

//複数回実行しても「一行しか書き込まれない」＝＝＝上書き