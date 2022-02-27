<?php

function fizzBuzz(int $max){
    for($i=1; $i<=$max; ++$i){
        if($i%15===0){
            echo "Fizz \n";
        }else if($i%5===0){
            echo "Buzz\n";
        }else if($i%5===0){
            echo "Fizz\n";
        }else{
            echo "{$i}\n";
        }
    }
}

//関数を呼び出す
fizzBuzz(50);