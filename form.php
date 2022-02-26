<?php

//いちいち長いのでこうする
function h(string $s):string{
    return htmlspecialchars($s,ENT_QUOTES);
}

// データの取得
$input = $_GET['input_text'];

// 出力
// XXX 危険!! XSSがある!! 危険!!
//echo "あなたが入力したのは " , $input , " ですね";

// 出力
// echo "あなたが入力したのは " , htmlspecialchars($input,  ENT_QUOTES) , " ですね";
// 出力
echo "あなたが入力したのは " , h($input) , " ですね";