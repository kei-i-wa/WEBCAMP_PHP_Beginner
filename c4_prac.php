<?php

//DEFINは定数作る　定数は大文字で！以下はNG!!

define('num_string',"999");
define('num_int',999);

var_dump(num_string);
var_dump(num_int);

define('TEST_FLOAT',1.23);
var_dump(TEST_FLOAT);