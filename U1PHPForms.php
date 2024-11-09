<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="U1PHPForms.php" method="post">
        <input type="text" name="Name" placeholder="Enter Your Name"><br><br>
        <input type="text" name="Email" placeholder="Enter Your Email"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    #Program 6: PHP forms (forms handling )

    //form handling
    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["Name"]) && isset($_POST["Email"])) {
        $get_name= $_POST["Name"];
    $get_Email= $_POST["Email"];
    echo $get_name;
    echo "<br>";
    echo $get_Email;
    }
    
    ?>
</body>
</html>
