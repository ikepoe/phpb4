<?php


//class object
class Magicconstants{

    public function getclassname1(){
        echo __CLASS__."<br/>";
    }

    public function getclassname2(){
        echo get_class($this). "<br/>";
    }




    public function getfunname1(){
        echo __FUNCTION__."<br/>";
    }

    public static function getfunname2(){
        echo __FUNCTION__."<br/>";
    }



    public function getmthname1(){
        echo __METHOD__."<br/>";
    }

    public static function getmthname2(){
        echo __METHOD__."<br/>";
    }



    public function getdir(){
        echo __DIR__. "<br/>";
    }

    public function getfile(){
        echo __FILE__. "<br/>";
    }

    public function getline(){
        echo __LINE__. "<br/>";
    }







}


trait Mytrait{
    public $email = "honey@gmail.com";
    public $password = "123456";


    // __TRAIT 
    public function gettriat(){
        echo __TRIAT__. "<br/>";
    }
}


class Authlogin{
    use Mytrait;

    public function login(){
        echo "This is user login . Email is $this->email & Password is $this->password . </br>";
    }

}






echo "This is Interface <br/>";


$obj1 = new Magicconstants();


echo "<hr/>";

$obj->getclassname1(); // Magicconstants
$obj->getclassname2(); // Magicconstants

$obj->getfunname1(); // getfunname1
$obj->getfunname2(); // getfunname2

$obj->getmthname1(); // Magicconstants::getmthname1
$obj->getmthname2(); // Magicconstants::getmthname2

$obj->getdir();
$obj->getfile();
$obj->getline(); // 47

echo "<hr/>";

$obj2 = new Authlogin();
$obj2->login(); // This is user login . Emial is honey@gamil.com & Password is 123456.
$obj2->gettriat();// Mytarit


echo "<hr/>";



?>