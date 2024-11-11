<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form E-Mail/URL</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .error{
            color: darkred;
        }
        .Container{
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
       $name = $email = $phonenumber = $website = $comment = "";
       $ername = $eremail = $erphonenumber = $erwebsite = $ercomment = "";

       function test_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
       }
       if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["name"]) && isset($_POST["phonenumber"]) && isset($_POST["email"]) && isset($_POST["website"]) && isset($_POST["comment"])){

        if(empty($_POST["name"])){
            $ername = "Please Enter Your Name";
        }
        else {
            $name = test_data($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $ername = "Only letters and white spaces are allowed";
            }
        }

        if(empty($_POST["phonenumber"])){
            $erphonenumber = "Please Enter Your Phone Number";
        }
        else {
            $phonenumber = test_data($_POST["phonenumber"]);
        }

        if(empty($_POST["email"])){
            $eremail = "Please Enter Your E-Mail";
        }
        else {
            $email = test_data($_POST["email"]);
        }

        if(empty($_POST["website"])){
            $erwebsite = "";
        }
        else {
            $website = test_data($_POST["website"]);
        }

        if(empty($_POST["comment"])){
            $ercomment = "";
        }
        else {
            $comment = test_data($_POST["comment"]);
        }
        
       }
    ?>
    <div id="Container">
            <span class="error">* Required filed</span>
        <br><br>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Name:<input type="text" name="name" placeholder="Enter Your User Name">
            <span class="error">*<?php echo $ername; ?></span>
            <br><br>
            Phone Number: <input type="text" name="phonenumber" placeholder="Enter Your Phone Number">
            <span class="error">*<?php echo $erphonenumber; ?></span>
            <br><br>
            E-Mail: <input type="text" name="email" placeholder="Enter Your Email">
            <span class="error">*<?php echo $eremail; ?></span>
            <br><br>
            Website: <input type="text" name="website" placeholder="Enter URL Here (Optional)">
            <span class="error"><?php echo $erwebsite; ?></span>
            <br><br>
            Comment:<br><textarea name="comment" rows="5" cols="40"></textarea>
            <span class="error"><?php echo $ercomment; ?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <h2>You Entered The Following Details</h2>
        <?php
            if(!empty($_POST["name"])){
                echo "<h4>"."Name:".$name."</h4>";
            }
            else {
                echo "";
            }
            
            if(!empty($_POST["phonenumber"])){
                echo "<h4>"."Phone Number:".$phonenumber."</h4>";
            }
            else {
                echo "";
            }

            if(!empty($_POST["email"])){
                echo "<h4>"."E-Mail:".$email."</h4>";
            }
            else {
                echo "";
            }
            
            if(!empty($_POST["website"])){
                echo "<h4>"."Website:".$website."</h4>";
            }
            else {
                echo "";
            }
            
            if (!empty($_POST["comment"])) {
                echo "<h4>"."Comment:".$comment."</h4>";
            }
            else {
                echo "";
            }
            
         ?>
    </div>
    
</body>
</html>