<?php

class 親クラス{
    public function 親メソッド(){
        echo "親クラス内の親メソッド\n";
    }
    public function メソッド(){
        echo "親クラス内のメソッド\n";
    }
}

class 子クラス extends 親クラス{
    public function 子メソッド(){
        echo "子クラス内の子メソッド\n";
    }
    public function メソッド(){
        echo "子クラス内のメソッド\n";
    }
}

$obj = new 子クラス();
$obj->親メソッド();
$obj->子メソッド();
$obj->メソッド();