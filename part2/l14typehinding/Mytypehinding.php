<?php

// Advantages of type hinting
    // helps users debug the code easily or the code provides error very specifically\
    // a greate concept for static kind of data

// Disadvantages of type hinting
    // funciton or method only take one type of data 
    // the dynamic data or argument are not there




class Typehinting{

    public function getdata(string $val){
        echo $val. "<br/>";
    }
}


echo "This is Interface <br/>";


$obj1 = new Mytypehinting();
$obj1->getdata('aungaung'); // aungaungerror
$obj1->getdata('10'); // 10 error
$obj1->getdata('100');  // 100 100
$obj1->getdata('25.68'); //25.68 error
$obj1->getdata(true); // 1 1
$obj1->getdata(['red','green','blue']); // error


echo "<hr/>";


class Typehinting2{

    public function getdata(string $val){
        echo $val. "<br/>";
    }
}


echo "This is Interface <br/>";


$obj2 = new Mytypehinting3();
$obj2->getdata('aungaung'); // aungaungerror
$obj2->getdata('10'); // 10 error
$obj2->getdata('100');  // 100 100
$obj2->getdata('25.68'); //25.68 error
$obj2->getdata(true); // 1 1
$obj2->getdata(['red','green','blue']); // error



echo "<hr/>";


class Typehinting3{

    public function getdata(bool $val){
        echo $val. "<br/>";
    }
}


echo "This is Interface <br/>";


$obj3 = new Mytypehinting3();
$obj3->getdata('aungaung'); // aungaungerror
$obj3->getdata('10'); // 10 error
$obj3->getdata('100');  // 100 100
$obj3->getdata('25.68'); //25.68 error
$obj3->getdata(true); // 1 1
$obj3->getdata(['red','green','blue']); // error



echo "<hr/>";


class Typehinting4{

    public function getdata(bool $val){
        echo $val. "<br/>";
    }
}


$obj4 = new Mytypehinting4();
// $obj4->getdata('aungaung'); // aungaung error
// $obj4->getdata('10'); // 10 error
// $obj4->getdata('100');  // 100 error
// $obj4->getdata('25.68'); //25.68 error
$obj4->getdata(true); // 1 1
// $obj4->getdata(['red','green','blue']); // error error


echo "<hr/>";


class Typehinting5{

    public function getdata(float $val){
        echo $val. "<br/>";
    }
}


$obj5 = new Mytypehinting5();
// $obj5->getdata('aungaung'); // aungaung error
// $obj5->getdata('10'); // 10 error
// $obj5->getdata('100');  // 100 100
// $obj5->getdata('25.68'); //25.68 25.68
$obj5->getdata(true); // 1 err0r
// $obj5->getdata(['red','green','blue']); // error error


echo "<hr/>";


class Typehinting6{

    public function getdata(array $val){
        echo $val. "<br/>";
    }
}


$obj6 = new Mytypehinting4();
// $obj6->getdata('aungaung'); // aungaung error
// $obj6->getdata('10'); // 10 error
// $obj6->getdata('100');  // 100 1error
// $obj6->getdata('25.68'); //25.68 error
$obj6->getdata(true); // 1 err0r
// $obj6->getdata(['red','green','blue']); // array array


echo "<hr/>";


class Typehinting6{

    public function getdata(array $arrs){

        $result =0;

        foreach($arrs as $arr){
            //$result += $arr;

            $result = $result + $arr;
        }

        echo $val. "<br/>";
    }
}


$obj7 = new Mytypehinting7();
$obj7->total([10,20,30,40,50]); //  150






class Phone{


    protected $brand;
    protected $hasfacesensor;
    protected $numberofsim;
    protected $price;

    public function setbrand(string $value){
        $this->brand = $value;
    }

    public function sethasfacesensor(bool $value){
        $this->hasfacesensor = $value;
    }

    public function setnumberofsim(int $value){
        $this->numberofsim = $value;
    }

    public function setprice(float $value){
        $this->price = $value;
    }

    public function getinfo(){
        echo "Brand name is = $this->brand <br/> Face sensor = $this->hasfacesensor <br/> Number of SIM = $this->numberofsim <br/> Price = $this->price <br/>";
    }
}

$objphone = new Phone();
$objphone->setbrand("iPhone");
$objphone->sethasfacesensor(true);
$objphone->setnumberofsim(2);
$objphone->setprice(999.68);

$objphone->getinfo();


?>