<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name=$email="";
        $nameErr=$emailErr="";

        function sanitize_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
        }
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $nameErr="Name is required";
            }
            else{
                $name=sanitize_input($_POST["name"]);
                if(!preg_match ("/^[a-zA-Z-' ]*$/", $name)){
                    $nameErr="Only letters and white space allowed";
                }
            }

            if(empty($_POST["email"])){
                $emailErr="Email is required";
            }
            else{
                $email=sanitize_input($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr="Invalid Email";
                }
            }

            if(empty($nameErr) && empty($emailErr)){
                echo "name: $name<br>";
                echo "Email: $email<br>";
            }
        }


    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo htmlspecialchars("$name");?>">
        <span class="error">*<?php echo $nameErr; ?></span>
        Email: <input type="email" name="email" value="<?php echo htmlspecialchars("$email");?>">
        <span class="error">*<?php echo $emailErr; ?></span>
        <input type="submit" value="submit">
    </form>
</body>
</html>