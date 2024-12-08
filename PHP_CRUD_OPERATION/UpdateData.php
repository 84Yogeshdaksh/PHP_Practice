<?php include "Connection.php"; 
$id= $_GET['id'];
$query = "SELECT * FROM students WHERE ID='$id'";
$data = mysqli_query($conn,$query);
$row = mysqli_fetch_array($data);
?>
<html>
    <head>
        <title>Update data</title>
</head>
<body>
<form action="" method="POST">
        FIRST_NAME <input type="text" value ="<?php echo $row['FIRSTNAME'];?>"name="fname" placeholder="Enter first name">
        <br><br>
        LAST_NAME <input type="text" value ="<?php echo $row['LASTNAME'];?>" name="lname" placeholder="Enter second name">
        <br><br>
        AGE <input type="number" value ="<?php echo $row['AGE'];?>" name="age" placeholder="Enter your age">
        <br><br>
        <input type="submit" value="update" name="update">
        <button><a href="Read_or_Displaydata.php">Back</button>
</form>

<?php
        if($_POST['update']){
            $name = $_POST["fname"];
            $nName = $_POST["lname"];
            $age = $_POST["age"];
           

            $update = "UPDATE students SET FIRSTNAME='$name', LASTNAME='$nName', AGE='$age' WHERE ID='$id'";
            $data = mysqli_query($conn, $update);

            if($data){
                ?>
                <script>alert("Data Update successfully");
                    window.open("http://localhost/PHP_Practice/PHP_CRUD_OPERATION/Read_or_Displaydata.php","_self");
                </script>
                
                <?php 
            }
            else{
                ?>
                <script>alert("Please try again");</script>
                <?php 
            }
        }
        ?>
</body>
</html>