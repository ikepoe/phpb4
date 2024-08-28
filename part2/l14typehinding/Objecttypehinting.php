<?php


class Lady{

    public $name = "Honey Nway Oo";

    public function firend(){
        return "My friend name is $this->name <br/>";
    }

}


function showresult(Lady $val){
    echo $val->firend();
}


echo "This is Object type hinting";


$obj1 = new Lady();
showresult($obj1);

showresult(new Lady());



class Brand{
    public function getjpnbrand(){
        return "Toyota Brand <br/>";
    }

    public function getchinabrand(){
        return "BYD Brand <br/>";
    }
}


class Car{


    public function getbrand(Brand $val){
        return $val;
    }

    public function getjpn(Brand $val){
        return $val->getjpnbrand;
    }

    public function getchn(Brand $val){
        return $val->getchinabrand;
    }
}


$objbrand = new Brand();
$objcar = new Car();

echo $objcar->getbrand($objbrand)->getjpnbrand();
echo $objbrand->getbrand($objbrand)->getchinabrand();


echo $objcar->getjpa($objbrand);
echo $objcar->getchn($objbrand);
















?>