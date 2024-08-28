<?php

// NOTE:: Interface's methods can't include body
// NOTE:: Modifier must be public in Interface. cuz we need to override
// NOTE:: To use an interface , a class must use to implements keyword
// NOTE:: A class that implements an interface must implements all of the interface's methods 
// NOTE::Can't contain properties / common method can't use but can contain constant variable



 interface News{
    public function createpost();
    public function readpost($id);
    public function updatepost($id,$title);
    public function deletepost($id);
 }
//class object
class Myinterface implements News{

    public function createpost(){
        echo "i am from create post .". self::CAPTION. "<br/>";
    }

    public function readpost($id){
        echo "i am from read post .& id = {$id} <br/>";
    }

    public function updatepost($id,$title){
        echo "i am from update post .& id = {$id}. Title is {$title}. <br/>";
    }

    public function deletepost($id){
   echo "i am deltet post . <br/>"
    }

    public function test(){
        echo "i am test. <br/>"
    }
  
 
}

class Articles implements News{

    public function createpost(){
        echo "i am from create article post .". self::CAPTION. "<br/>";
    }

    public function readpost($id){
        echo "i am from read article post .& id = {$id} <br/>";
    }

    public function updatepost($id,$title){
        echo "i am from update article post .& id = {$id}. Title is {$title}. <br/>";
    }

    public function deletepost($id){
        echo "i am deltet article post . <br/>"
    }

    
 
}





echo "This is Interface <br/>";


$obj = new Myinterface();
$obj->readpost(10);
$obj->updatepost(10), "This is new post 10"
$obj->deletepost(10);
$obj->test();

echo "<hr/>";

$obj2 = new Articles();
$obj2->readpost(10);
$obj2->updatepost(10), "This is new post 10"
$obj2->deletepost(10);
$obj2->test();

echo "<hr/>";









?>
