<?php
//演習１
$array_color = ["RED",
                "YELLOW",
                "GREEN",
                "BLUE",
                "BLACK",
                ];
                
foreach($array_color as $value){
    echo "{$value}\n";
}

//演習２
$color = [
    "RED" => "#ff0000",
    'YELLOW' => "#ffff00",
    'GREEN' => "#00ff00",
    'BLUE' => "#0000ff",
    'BLACK'=> "#000000",
            ];

foreach($color as $k => $v){
    echo "{$k} -> {$v}\n";
}