<?php

function h(string $s):string{
    return htmlspecialchars($s,ENT_QUOTES);
}

//HTMLフォームから入ってくる情報の一覧
$html_form_params=[
    "pw" => "パスワード",
    "radio_a" =>"ラジオボタン",
    "check" =>"チェックボックス",
    "sele"=>"セレクトボックス",
    "terea"=>"テキストエリア",
    "hide"=>"隠れた入力(hidden)",];
    
    
//情報を取得する
$datum =[];
foreach($html_form_params as $name => $type){
    $datum[$name] = $_POST[$name]??"";
}

//入力データの確認
var_dump($datum);
    