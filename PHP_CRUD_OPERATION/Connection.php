<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'Details';

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
    echo "";
}
else{
    die("connection falied");
}

?>