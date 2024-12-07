<?php
// PDO (php data object approach)

$servername = "localhost";
$username = "root";   
$password = "";            

try{
    $conn = NEW pdo("mysql: host=$servername",$username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection successful";
}
catch(pdoexception $e){
    die("Connection failed: " . $e->getMessage());
}
?>
