<?php

interface Role{
    public function setid($id);
    public function createrole();
    public function readrole($id);
    public function updaterole($id,$request);
    public function deleterole($id);
}


class Ourinterface{

    public $id;
    public $request;

    public function setid($id){
      
    }
    public function createrole(){
        echo "i am from create role. <br/>"
    }
    public function readrole($id){
        $this->id = $id;
        echo "i am from read role and i have to read record id = {$this->id} <br/>"
    }
    public function updaterole($id,$request){
        $this->id = $id;
        $this=request = $request;
         echo "i am from read role and i have to read record id = {$this->id}. Any request data is = {$this->request}  <br/>"
    }
    public function deleterole($id){
        echo "i am from delete rol and i have to delete record id = {$this->id} <br/>";
    }


}

$obj = new Ourinterface();

$obj->setid(500);
$obj->createrole(); // i am from create role. 
$obj->readrole(10); // i am from read role and i have to read record id = 10
$obj->updaterole(12,"aung aung"); // i am form update role and i have to updae record id = 10 . Any my request data is aung aung
$obj->deleterole();

echo "<hr/>";



















?>