<?php
#Program 3: Statements "1. Declaration Statements 2. Expression Statements 3. Assignment Statements 4. Control Flow Statements(if, else, switch) 5. Function Call Statements 6. Return Statement 7. Include and Require Statements"

#Declaration Statements
$Fst_name="Yogesh";
$Lst_name="Kumar";
$age=19;
$num=12;
define("PI", 3.14159);  // Constant declaration



#Expression Statements
$sum = $age+$num;
echo"$sum"; //sum
$concatenation="My name is ". $Fst_name.$Lst_name;//concatenation
echo $concatenation;



#Assignment Statements
$x=52;
$y=23;



#Control Flow Statements
if ($x<$y){ 
    echo "True";
}
elseif ($x>$y) {
    echo "X is greater then Y ";
  
}

else {
    echo "false";
}



#Function call statements
function sum($a,$b){
    return $a+$b; //Return Statement
}

echo sum($x,$y);


#Include and Require Statements

include 'OOUUserInput1.php';





    





?>