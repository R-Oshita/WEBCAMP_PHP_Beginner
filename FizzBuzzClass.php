<?php

class FizzBuzz
{
    private int $max;
    public function exec()
    {
        for ($i = 1; $i <= $this->max; ++$i) {

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

    public function setMax($i)
    {
        $this->max = $i;
    }
  
}



$obj = new FizzBuzz();
$obj->setMax(50);
$obj->exec();
