<?php

ini_set('display_errors',1);

require_once("Music.php");
require_once("Video.php");
require_once "gallery/Photo.php";



$musicobj = new Musci();
$musicobj->play();

$vidoeobj = new Video();
$vidoeobj->play();

$photoobj = new Photo();
$photoobj->play();





?>
