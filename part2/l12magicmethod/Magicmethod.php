<?php


//class object
class Mystaitcmodifier{

    //Static Property
    public static $count = 0;

    // None-static Property
    public $idx = 0;



    public function getvalue(){
        self::$count++;
        echo self::$count . "<br/>";


        $this->idx++;

    }



    public function getresult(){
        static::$count++;
        echo static::$count . "<br/>";


        $this->idx++;
    }



}


class Baby1 extends Mystaitcmodifier{

}

class Baby2 extends Mystaitcmodifier{
    public function getmore(){

    }
}




echo "This is Interface <br/>";


$obj1 = new Mystaitcmodifier();
echo $obj1::$count; // 0 Static property
echo "<br/>";
echo $obj1->idx; // 0 None-Static property


$obj1->getvalue(); //1 1
$obj1->getvalue(); // 2 2
$obj1->getvalue(); // 3 3
$obj1->getvalue(); // 4 4

echo "<hr/>";

$obj1->getresult(); // 5 5
$obj1->getresult(); // 6 6
$obj1->getresult(); // 7 7
$obj1->getresult(); // 8 8

echo "<hr/>";

$obj2 = new Mystaitcmodifier();
$obj2->getvalue(); //9 1
$obj2->getvalue(); // 10 2
$obj2->getvalue(); // 11 3
$obj2->getvalue(); // 12 4


$obj2->getresult(); // 13 5
$obj2->getresult(); // 14 6
$obj2->getresult();
$obj2->getresult();


echo "<hr/>";


$obj3 = new Baby1();

$obj2->getvalue(); //17 1
$obj2->getvalue(); // 18 2
$obj2->getvalue(); // 19 3
$obj2->getvalue(); // 20 4


$obj2->getresult(); // 21 5
$obj2->getresult(); // 22 6
$obj2->getresult(); // 23 7
$obj2->getresult(); // 24 8


echo "<hr/>";

$obj4 = new Baby2();

$obj4->getmore(); // 25 1
$obj4->getmore(); // 26 2
$obj4->getmore(); // 27 3
$obj4->getmore(); // 28 4


?>
