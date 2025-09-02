<?php 
$a = 10;
echo "global:a is {$a} \n";

function myFunc(){
    $b = 999;
    echo "in function:b is {$b} \n";

       // 変数の使用：使えない
    echo "in function:a is {$a} \n";
}

myFunc();

// 変数の使用：使えない
echo "global:b is {$b} \n";