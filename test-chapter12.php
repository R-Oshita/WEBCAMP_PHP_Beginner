<?php 

class MyTest{
    public function add($i,$j){
        
        return $i + $j;
    }

    public function sub($i,$j){
        return $i - $j;
    }


}

$obj = new MyTest;
echo $obj->add(5,2),"\n";
echo $obj->sub(5,2),"\n";

class MyTest2{
    private $price;
    private $name;

    public function setPrice($i){
        $this -> price=$i;
    }

    public function getPrice(){
        return $this->price;
    }
    public function setName($j){
        $this -> name=$j;
    }

    public function getName(){
        return $this->name;
    }

}

$obj = new MyTest2();
$obj->setPrice(200);
$obj->setName("りんご");

echo $obj->getPrice(),"円:",$obj->getName(),"\n";