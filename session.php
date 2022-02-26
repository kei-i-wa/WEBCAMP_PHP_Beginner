<?php
//バッファリング（どこかに貯めておく）開始
ob_start();
//セッションスタート
session_start();

function h(string $s):string{
    return htmlspecialchars($s,ENT_QUOTES);
}

//セッションから数値を読み込む
$counter = $_SESSION['counter']?? 1;
//出力
echo "セッション：あなたがこのサイトを訪れたのは",h( strval($counter) ),"回目ですね";

$next_counter = $counter+1;

$_SESSION['counter']=$next_counter;
ob_end_flush();