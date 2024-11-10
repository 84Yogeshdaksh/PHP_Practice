<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="Username" placeholder="Enter your user name"><br><br>
            Email: <input type="text" name="Email" placeholder="Enter your Email"><br><br>
            Password: <input type="password" name="Password" placeholder="Enter your password"><br><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>

    <?php
    $name = $email = $Password = "";
    if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["Username"]) && isset($_POST["Email"]) && isset($_POST["Password"])) {
        $name = test_input($_POST["Username"]);
        $email = test_input($_POST["Email"]);
        $Password = test_input($_POST["Password"]);
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    echo "Your Input 👇:<br>";
    echo $name . "<br>";
    echo $email . "<br>";
    echo $Password . "<br>";
    ?>
</body>
</html>