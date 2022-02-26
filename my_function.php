<?php
//intと書くことで型を明確にできるが書かなくてもいける
//:intで戻り値の型も指定できる。なくてもいける
function numToDouble(int $i):int
{
    $ret = $i *2 ;
    return $ret;
}

$num = numToDouble(10);
echo "10を２倍にしたら{$num}になった \n";

//2つの引数
function numAdd(int $a,int $b):int
{
    $ret = $a + $b;
    
    return $ret;
}

$add = numAdd(5,6);
echo "5と６をたすと{$add}になった。\n";