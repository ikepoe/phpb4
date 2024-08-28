<?php

trait Hello{

    public $fullname = "Honey Nway Oo";
    public $email = "honey@gmail.com";
    public $password = "1234556";

    public function useraccess(){
        echo "This is site login . Email is $this->email & Password is $this->password. <br/>";
    }

    public function userinfo(){
        echo "Profile is $this->fullname . <br/>";
    }
}

class Googleauth{
    public function gmaillogin(){
        echo "This is Gmail login . Eamil is aungaung@gmail.com & Profile name is aung aung <br/>";
    }
}


// Class object

class Mytrait extends Googleauth{


}



echo "This is Trait <br/>";


$obj = new Mytrait();












?>
