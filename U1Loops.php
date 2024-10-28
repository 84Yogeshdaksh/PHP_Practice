<?php
#Program 6: Loops(For, while, do-while)
$a=0;
#For loop
echo "#For loop<br>";
for ($i=0; $i < 10; $i++) { 
    echo ($i)."<br>";
}

#while loop
echo "While loop<br>";
while ($a <= 10) {
    echo ($a)."<br>";
    $a+=1;
}

#Do-while loop
echo "Do-while loop<br>";
do {
    echo ($a)."<br>";
    $a+=1;
} while ($a <= 20);

#foreach loop
echo "Foreach loop<br>";
$students = [
    ["name" => "John", "age" => 18, "grade" => "A"],
    ["name" => "Doe", "age" => 20, "grade" => "B"]
];

foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo $key . ": " . $value . " ";
    }
    echo "<br>";
}

$numbers = [1, 2, 3, 4];

foreach ($numbers as &$num) {
    $num *= 2;
}

print_r($numbers);  // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 )



?>