<?php
//Fizz Buzzプログラム課題
for($i=1;$i<=100;++$i){
    if($i%15===0){
        echo "Fizz Buzz\n";
    }else if($i%3===0){
        echo "Fizz\n";
    }else if($i%5===0){
        echo "Bizz\n";
    }else{
        echo "{$i}\n";
    }
}