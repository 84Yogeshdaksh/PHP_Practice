<?php Include "connection.php";?>
<html>
    <head>
        <title>Insertion Operation</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        FIRST_NAME <input type="text" name="fname" placeholder="Enter first name">
        <br><br>
        LAST_NAME <input type="text" name="lname" placeholder="Enter second name">
        <br><br>
        AGE <input type="number" name="age" placeholder="Enter your age">
        <br><br>
        <input type="submit" value="submit" name="click">
        <button><a href="Read_or_Displaydata.php">view detail</button>
        </form>
        <?php
        if($_POST["click"]){
            $name = $_POST["fname"];
            $nName = $_POST["lname"];
            $age = $_POST["age"];
           

            $query = "INSERT INTO students (FIRSTNAME,LASTNAME,AGE) VALUES('$name','$nName','$age')";
            $data = mysqli_query($conn, $query);

            if($data){
                ?>
                <script>alert("Data saved successfully");</script>
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