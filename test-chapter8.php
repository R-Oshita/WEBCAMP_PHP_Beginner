<?php 

$array =["Red","Yellow","Green","Blue","Black"];
foreach($array as $value){
    echo $value;
    echo "\n";
};

$array2 =[
    
    "Red" => "#ff0000",
    "Yellow"=> "#ffff00",
    "Green"=> "#00ff00",
    "Blue"=> "#0000ff",
    "Black"=> "#000000",
];
foreach($array2 as $k => $v){
    echo "{$k} => {$v}";
    echo "\n";
};