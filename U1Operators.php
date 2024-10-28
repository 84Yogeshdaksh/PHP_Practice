<?php
#Program 5: Operators in PHP(Arithmetic, Assignment, Comparison, Increment/Decrement, Logical, String, Array, Conditional Assignment)

$x=23;
$y=7;

#Arithmetic Operators(+,/,*,-,**,%)
echo"Arithmetic Operations<br>";
echo ($x+$y)."<br>";
echo ($x-$y)."<br>";
echo ($x*$y)."<br>";
echo ($x/$y)."<br>";
echo ($x**$y)."<br>"; //Exponentiation
echo ($x%$y)."<br><br>";

#Assignment Operators(=,*=,/=,*=,%=)
echo "Assignment Operations<br>";
echo ($x=$y)."<br>";
echo ($x+=$y)."<br>";
echo ($x-=$y)."<br>";
echo ($x*=$y)."<br>";
echo ($x/=$y)."<br>"; 
echo ($x%=$y)."<br><br>";

#Comparison Operators(==,!=,<,=<,>,>=)
echo "Assignment Operations<br>";
var_dump($x===$y)."<br>"; 	//Identical
echo ($x==$y)."<br>";
echo ($x!=$y)."<br>";
echo ($x<$y)."<br>";
echo ($x<=$y)."<br>";
echo ($x>$y)."<br>"; 
echo ($x>=$y)."<br>";
$result = $x <=> $y; // Result will be 1 because $x is greater than $y
echo $result."<br><br>";

#Increment/Decrement Operators(++x,x++,--x,x--)
echo "Increment/Decrement Operators<br>";
echo ($x++)."<br>";
echo (++$x)."<br>";
echo ($x--)."<br>";
echo (--$x)."<br><br>";

#Locial Operators(and,or,not,xor)
echo "Logical Operators<br>";
echo ($x<15 && $y>15)."<br>";
echo ($x<15 || $y>15)."<br>";
echo (!($x<15))."<br>";
echo ($x<15 xor $y>15)."<br><br>";

#String Operators
echo "String Operators<br>";
echo "$x"."$y"."<br><br>";

#Array Operators
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y)."<br>"; // union of $x and $y

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x != $y) ; //Inequality

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x <> $y) ; //Inequality
echo "<br><br>";

#Conditional Assignment
echo "Conditional Assignment<br>";
echo $status = (empty($user)) ? "anonymous" : "logged in";/*Returns the value of $x.
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE */
echo("<br>");

$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in <br>";

 // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous"; /*Returns the value of $x.
   The value of $x is expr1 if expr1 exists, and is not NULL.
   If expr1 does not exist, or is NULL, the value of $x is expr2.
   Introduced in PHP 7	
   */ 
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";



?>