<?php



$array = [0, 1];


// var_dump($array);

$i = 2;
$sum = 1;
while ($sum < 10000) {

    $array[] = $array[$i - 2] + $array[$i - 1];
    $sum = $array[$i];
    ++$i;
}

foreach ($array as $value) {
    echo "{$value} \n";
}
