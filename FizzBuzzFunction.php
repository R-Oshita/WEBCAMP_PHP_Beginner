<?php

function fizzBuzz(int $max)
{
    for ($i = 1; $i <= $max; ++$i) {

        if (($i % 3) === 0 && ($i % 5) === 0) {
            echo "Fizz Buzz \n";
        } elseif (($i % 3) === 0) {
            echo "Fizz \n";
        } elseif ($i % 5 === 0) {
            echo "Buzz \n";
        } else {
            echo "{$i} \n";
        }
    }
}

fizzBuzz(50);
