<?php 
 $awk = [123];
 var_dump($awk);

 $awk2 = [999,"Hello",3.14];
 var_dump($awk2);

// 要素1つの中身を見たり書き換えたりする
var_dump( $awk2[0] );
// 書き換え
$awk2[0] = 654321;
var_dump( $awk2[0] );

 $awk[] = 1.1111;
 $awk[]= "こんにちは";

 var_dump($awk);