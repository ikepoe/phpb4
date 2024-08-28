<?php

class Staticvsnonstatic{
    
    // Member variables

    // Non-static propert
    public $fullname = "Honey Nway Oo";

    // Static property
    public static $city = "Yangon";

    // Constant
    const GENDER = "Female";



    // Member Mehtod
    //Non-static mehtod can call staitc property and Non-static property
    // Non-static mehtod can call Static method and Non-static mehtod


    // Static mehtod can not call Non-static property
    // Static mehtod can not call Non-static method


    // Non-static Mehtod

    public function getname(){
        echo "I am Non-static method <br/>";

        echo "Name is $this->fullname <br/>";
    }

    
    public function getcity(){
        echo "I am Non-static method <br/>";
        
        echo "City is" . $this->fullname .  "<br/>";
    }

      
    public function getgender(){
        echo "I am Non-static method <br/>";
        
        echo "City is" . self::GENDER .  "<br/>";
    }

    public function car(){
        echo "I am Non-static method <br/>";

        $brand = self::carbrand();
        echo "I bought a new ${brand} car . <br/>"
    }

    public function carbrand(){
        return "Toyota LEXUS LX570"
    }


    // Static Mehtod

    public static function getstaticcity(){
        echo "I am Static method <br/>";

        echo "City is " . self::$city . "& hometown is " . static::$city . "<br/>";
    }

    public static function getstaticgender(){
        echo "I am Static method <br/>";

        echo "City is " . self::GENDER . "<br/>";
    }





    
}





echo "This is Static vs Non-static Modifier <br/>";


$obj = new Staticvsnonstatic();

echo $obj->fullname; //Honey Nway Oo
echo "<br/>";

echo $obj::$city; // Yangon
echo "<br/>";
echo Staticvsnonstatic::$city;  // Yangon
echo "<br/>";


echo $obj::GENDER; // Female
echo "<br/>";
echo Staticvsnonstatic::GENDER;  // Female
echo "<br/>";



 //static Mehtod

 $obj::getstaticcity(); // City is Yangon & hometown is Yangon
 $obj::getstaticgender(); // Gender is Female


 Staticvsnonstatic::getstaticcity(); // City is Yangon & hometown is Yangon
 Staticvsnonstatic::getstaticgender(); // Gender is Female

echo "<hr/>";









?>