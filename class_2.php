<?php

class MyClass{
    const HOGE = "string";
    //newをしたときに自動で実行されるのがコンストラクタ
    public function _construct(){
        echo "コンストラクタが動いた\n";
    }
    //プログラムが終わるタイミングで自動的にディストラクタが動く
    public function _distruct(){
        echo "デストラクタが動いた\n";
    }
}

var_dump( MyClass::HOGE );

$obj = new MyClass();