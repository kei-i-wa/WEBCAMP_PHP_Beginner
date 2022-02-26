<?php

$i = 123;

if($i<=100){
    echo "100以下です\n";
}else{
    echo "100超える\n";
}

$i = 123;
if($i<50){
    echo "< 50 \n";
}else if($i<100){
    echo "100未満\n";
}else if($i<150){
    echo "150未満\n";
}else{
    echo "150以上\n";
}