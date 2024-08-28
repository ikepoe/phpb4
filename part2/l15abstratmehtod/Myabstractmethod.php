<?php

// NOTE :: Interface's methods can't include body
// NOTE :: Modifier must be public in Interface. cuz we need to override
// NOTE :: To use an interface , a class must use to implements keyword
// NOTE :: A class that implements an interface must implements all of the interface's methods 
// NOTE :: Can't contain properties / common method can't use but can contain constant variable

                // VS 

// Note :: Abstract mehtod can't include body
// NOTE :: Any Modifier can set in sabstrat
// Note :: To use an abstract mehtod , a class must use to extends keyword.
// Note :: A class that extends sub class must extends all of the abstract's methods.
// Note :: can contain none-static properties / static proerites /common method but can contain constant variable
// Note :: When we set abstract method !!! class must be abstract class as well.





//class object
abstract class Myabstractmehtod{

    public $id = 50;
    public static $notifi = "New Articale Created";
    const TITLE = "This is a new article for SPORT";

    // Common Method

    public function createpost(){
        echo "I am form create post . Post title is = ".self::TITLE . "<br/>";
    }

    public function readpost(){
        echo "I am read post . ID is = ". $this->id . "<br/>";
    }

    abstract public function updatepost($id,$title);

    public function deletepost($id){
        echo " I am delete post . ID is = {$id}"."<br/>";
    }

}


class Articles extends Myabstractmehtod{

    public function updatepost($id,$title){
        echo "i am form update . ID is {$id} . Title is {$title}. <br/> ";
    }
}




// We can't instantiate avbstract class
// $obj = new Myabstractmehtod();

echo "This is Abstract Method <br/>";



echo "<hr/>";


$obj2 = new Articles();

echo $obj2->id;
echo "<br/>";
echo $obj2::$notifi;
echo "<br/>";
echo $obj2::TITLE;
echo "<br/>";


$obj2->createpost(); // I am form create post . Post id =
$obj2->readpost(); // I am read post . ID is = 50
$obj2->updatepost(20,"This is new post 20"); // I am from update. Id is 20. Title is This is new post 20
$obj2->deletepost(100); // I am delete post . ID is = 100






abstract class Info{

    abstract protected function name();
    abstract protected function age();
    abstract protected function professional($gender);

    public function getname(){
        return $this->name();
    }

    public function getage(){
        return $this->age();
    }

    public function getprofessional(){
        return $this->professional();
    }
}


class Boyclass extends Info{

    public function name(){
        return "Ko Zaw Zaw";
    }

    public function age(){
        return 25;
    }

    public function professional($gender){
        
        switch($gender){
            case "male";
                $job = "Engineer";
                break;
            case "female";
                $job = "Doctor";
                break;
            default;
                $job = "Developer";
                break;
        }

        return $job;
    }


}


class Girlclass extends Info{

    protected function name(){
        return "Ms.July";
    }

    protected function age(){
        return 30;
    }

    protected function professional($gender){
        
        switch($gender){
            case "male";
                $job = "Engineer";
                break;
            case "female";
                $job = "Doctor";
                break;
            default;
                $job = "Developer";
                break;
        }
    }


}



$boyobj = new Boyclass();
$boyname = $boyobj->name();
$boyage = $boyobj->age();
$boyrp = $boyobj->professional('male');

echo "{$boyname} is {$boyage} year old & he is {$boypro} . <br/>";

// $girlobj = new Girlclass();
// $girlname = $girlobj->name();
// $girlage = $girlobj->age();
// $girlpro = $girlobj->professional();

// echo "{$girlname} is {$girlage} year old & he is {$girlpro} . <br/>";



$girlobj = new Girlclass();
$girlname = $girlobj->name();
$girlage = $girlobj->age();
$girlpro = $girlobj->professional('female');

echo "{$girlname} is {$girlage} year old & he is {$girlpro} . <br/>";

?>
