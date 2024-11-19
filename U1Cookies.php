<?php
setcookie("name","Yogesh",time()+120,"/");

// $cat = $_COOKIE["name"];
// echo $cat;

if (isset($_COOKIE)) {
    foreach ($_COOKIE as $key => $value) {
        echo "cookie name: ". $key . "<br>";
        echo "cookie value: ". $value. "<br>";
    }
}
?>