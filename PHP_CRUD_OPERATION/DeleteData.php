<?php include "Connection.php";
$id = $_GET['id'];
$delete = "DELETE FROM students WHERE ID='$id'";
$data = mysqli_query($conn, $delete);
if($data){
    ?>
    <script>alert("Data Delete successfully");
    window.open("http://localhost/PHP_Practice/PHP_CRUD_OPERATION/Read_or_Displaydata.php","_self");
    </script>
    <?php
}
else{
    ?>
    <script>alert("Data Not Deleted");
    window.open("http://localhost/PHP_Practice/PHP_CRUD_OPERATION/Read_or_Displaydata.php","_self");
    </script>
    <?php
}
?>