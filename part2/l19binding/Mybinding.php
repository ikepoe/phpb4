<?php

// => Data Binding
//  (i) Static Binding (or) Early binding
//  (ii) Dynamic Binding (or) Late Binding (or) late Static Binding


//Class object
class hola1{

    public $name = "Ko Ko";

    public function friend(){
        return "My best friend name is " . $this->name . "<br/>";
    }

    public function getfriend(){
        echo $this->friend();
    }


}

class hola2 extends hola1{

    public function friend(){
        return "My best friend name is " . $this->name .  " and Su Su <br/>";
    }
    
}






echo "This is Interface <br/>";


$obj1 = new Mybinding();


echo "<hr/>";


?>