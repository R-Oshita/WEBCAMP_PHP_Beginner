<?php 
declare(strict_types=1) ;
function numToDouble(int $i){
    $ret = $i *2;
    return $ret;
}

$num = numToDouble(10);
echo "10を2倍にしたら{$num}になった \n";

// 2つの引数を「加算する」関数
function numAdd(int $a, int $b)
{
    // 加算する
    $ret = $a + $b;

    // 戻り値
    return $ret;
}
//
$add = numAdd(5, 3);
echo "5 と 6を足したら {$add} になった \n";