<!DOCTYPE html>
<!--Out of Unit topic "Program 2 on get user input and stor it into a variable a print it using GET method" -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="OOUUserInput1.php">
        <input type="number" name="input" placeholder="Enter a integer number" required>
        <button type="submit">Submit</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET['input'])){
        
        function fact($num){
            if ($num<=1) {
                return 1;
            }
            else {
                return $num*fact($num-1);
            }
        }
        $number=$_GET['input'];
        $factorial=fact($number);
        echo "<p>Factorial of $number is : $factorial</p>";

        
    }
    ?>
</body>
</html>