<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Required</title>
    <style>
        .error{
            color: darkred;
        }
    </style>
</head>
<body>

<?php
    $Username = $PhoneNumber = $Password = $Email ="";
    $errusername = $errphonenumber = $errpassword = $erremail = "";
    function test_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["Username"]) && isset($_POST["Password"]) && isset($_POST["Phonenumber"]) && isset($_POST["Email"])){
        if(empty($_POST["Username"])){
            $errusername = "User Name Required";
        }
        else {
            $Username = test_data($_POST["Username"]);
        }

        if (empty($_POST["Phonenumber"])) {
            $errphonenumber = "Phone Number Required";
        }
        else {
            $PhoneNumber = test_data($_POST["Phonenumber"]);
        }

        if (empty($_POST["Password"])) {
            $errpassword = "Please Create Your Password";
        }
        else {
            $Password = test_data($_POST["Password"]);
        }

        if (empty($_POST["Email"])) {
            $erremail = "";
        }
        else {
            $email = test_data($_POST["Email"]);
        }
    } 

    ?>


    <h2>PHP Form Required filed Example</h2>
    <span class="error">* Required filed</span><br><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
       User Name: <input type="text" name="Username" placeholder="Enter User Name">
       <span class="error">*<?php echo $errusername; ?></span>
       <br><br>
        Phone Number: <input type="text" name="Phonenumber" placeholder="Enter Phone Number">
        <span class="error">*<?php echo $errphonenumber; ?></span>
        <br><br>
        Password: <input type="password" name="Password" placeholder="Create Password">
        <span class="error">*<?php echo $errpassword; ?></span>
        <br><br>
        Email <input type="text" name="Email" placeholder="Enter Email (Optional)">
        <span class="error"><?php echo $erremail; ?></span>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form> 

    <h2>Your Input</h2>
    <?php
     echo $Username."<br>";
     echo $PhoneNumber."<br>";
     echo $Password."<br>";
     echo $Email."<br>";
    ?>
</body>
</html>