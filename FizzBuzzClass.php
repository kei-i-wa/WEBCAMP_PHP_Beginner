<?php

class FizzBuzz{
    private $max;
    
    public function exec(){
            for($i=1; $i<=$this->max; ++$i){
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
    
        //セッターで値をセットする
    public function setMax($v){
        $this->max = $v;
    }

}


$obj= new FizzBuzz();
$obj ->setMax(50);
$obj->exec();