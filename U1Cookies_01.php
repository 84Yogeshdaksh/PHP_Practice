<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coockies</title>
    <style>
        .error{
            color:darkred;
        }
    </style>
</head>
<body>
    <?php
    function test_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = $option = "";
    $errname = $erroption = "";
    if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["name"])) {
        if (empty($_POST["name"])) {
            $errname = "Name is Required";
        }
        else {
            $name = test_data($_POST["name"]);
        }

        $option = $_POST["select"];
        if ($option == "None") {
            $erroption = "None is not a catogray select another one";
        }
        else {
            $option = test_data($_POST["select"]);
        }
        $cookie_name = preg_replace("/[^a-zA-Z0-9-_]/", "_", $name);
        if (empty($errname) && empty($erroption)) {
            setcookie("$cookie_name","$option",time()+120,"/");
        }
        
    }
    ?>
    <form method="Post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" placeholder="Enter your name">
        <span class="error">*<?php echo $errname; ?></span>
        Catogery: <select name="select">
            <option value="None">None</option>
            <option value="Book">Book</option>
            <option value="Movie">Movie</option>
            <option value="Songs">Songs</option>
            <option value="Images">Images</option>
        </select>
        <span class="error">*<?php echo $erroption; ?></span>
        <input type="submit" name="submit" placeholder="Submit">
    </form>
    
</body>
</html> 