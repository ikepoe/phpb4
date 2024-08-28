<?php

ini_set('display_errors',1);


class Mycopy{

    public $article;

    public function __construct($val){
        $this->article = $val;
    }

}


function copyobject(Mycopy $obj1,Mycopy $obj2){

    $obj2->article = $obj1->article;

}

echo "This is Copy Object . <br/> ";

$newobj1 = new Mycopy("This is new article 1");
$newobj2 = new Mycopy("This is new article 2");

echo $newobj1->article; // This is new article 1
echo "<br/>";
echo $newobj2->article; // This is new article 2

echo "<br/>";

copyobject($newobj1,$newobj2);

echo $newobj2->article; // This is new article 1

echo "<hr/>";








?>
