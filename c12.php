<?php

class MyTest{
    // private $i;
    // private $s;
    public function add($i,$s){
        $val = $i + $s;
        return $val;
    }
    public function sub($i,$s){
        $val2 = $i - $s;
        return $val2;
    }
}

class MyTest2{
    private $price;
    private $name;
    
    public function setPrice($v){
        $this->price = $v;
    }
    public function getprice(){
        return $this->price;
    }
    
    public function setName($n){
        $this->name = $n;
    }
    public function getName(){
        return $this->name;
    }
}