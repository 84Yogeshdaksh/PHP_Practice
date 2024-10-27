<!DOCTYPE html>
<!--Out of Unit topic "get user input and stor it into a variable a print it using POST method" -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="OOUUserInput.php">
        <input type="text" name="username" placeholder="Enter Your name here">
        <button type="submit">Submit</button>
    </form>
    <?php
    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $U_name = $_POST['username'];
        echo "<p>Your name is: $U_name</p>";
    }
    ?>
</body>
</html>
