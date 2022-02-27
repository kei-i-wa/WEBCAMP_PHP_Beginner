<?php

try{
    //自分で例外を投げてみる
    throw new \Exception("自力で投げた例外");
    $obj = new SplFileObject('dummy');
    
    echo "例外が起きたとき\n";
    //Throwableはどの例外をキャッチするか　これはどの例外もキャッチする。
}catch(\Throwable $e){
    echo "例外が発生\n";
    var_dump($e->getMessage());
}

echo "fin/\n";