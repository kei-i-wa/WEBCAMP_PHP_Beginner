<?php

function myFuncStringAdd(string $S,string $K):string
{
    $word = $S.$K."\n";
    return $word;
}


echo myFuncStringAdd("Hello","World");