<?php 

function myFuncStringAdd(string $a,string $b){
        $ret = "{$a}{$b}";
        return $ret;
};
echo myFuncStringAdd("大下","です");

