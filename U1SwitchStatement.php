<!DOCTYPE html>
<!--Program 4: Switch Statement-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="U1SwitchStatement.php">
        <input type="number" name="number1" placeholder="Enter First Integer number" required>
        <br>
        <input type="number" name="number2" placeholder="Enter Second Integer number" required>
        <br>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <p>+,-,*,/</p>
        <button type="submit">Submit</button>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['operator']) ){
            $x = $_POST['number1'];
            $y = $_POST['number2'];
            $z = $_POST['operator'];
            switch ($z) {
                case '+':
                    echo "<p>sum: </p>". $x+$y;
                    break;
                case '-':
                    echo "<p>Subtraction: </p>". $x-$y;
                    break;
                case '*':
                    echo "<p>Multiplication: <p>". $x*$y;
                    break;  
                case '/':
                    echo "<p>Division: </p>". $x/$y;
                    break;
                default:
                    echo "<p>You are entered a Invalid operator....!</p>";
                    break;
            }
        }
    ?>

</body>
</html>