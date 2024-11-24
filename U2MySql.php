<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Sorry we are not connect to database at that time". mysqli_connect_error()) ;   
}
else{
    echo "Welcome we are connect to the database succesfully";
}

?>