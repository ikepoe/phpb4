
<?php


// require_once(Music.php);
// require_once(Video.php);
// require_once(gallery/Photo.php);

spl_autoload_register(function($classname){
    // echo "Loading the class = $classname <br/>";

    require_once "$classname.php";
});


$musicobj = new Musci();
$musicobj->play();


$vidoeobj = new Video();
$vidoeobj->play();

// error
// $photoobj = new Photo();
// $photoobj->play();

echo "<hr/>";









?>