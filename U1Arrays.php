<?php
#Program 7: Arrays(1D,1D associative, multidimenstional, multidimenstional associate,foreach loop for array,var_dump function, print_r function)

#1D Array
$colour = ["red","green","blue","black","White"];

echo $colour[0] . "<br>";
echo $colour[1] . "<br>";
echo $colour[2] . "<br>";
echo $colour[3] . "<br><br>";

echo "Print using for loop<br><br>";
for ($i=0; $i < count($colour); $i++) { 
    echo $colour[$i];
    echo "<br>";
}


echo "<br><br>";
echo "Print using foreach loop<br><br>";
foreach ($colour as $color) {
    echo $color;
    echo "<br>";
}


echo "<br><br>";
echo "Print Using print_r function";
echo "<pre>";
print_r($colour);
echo "</pre>";

echo "<br><br>";
echo "Print using var_dump function<br>";
echo "<pre>";
var_dump($colour);
echo "</pre>";

echo "<br><br>";
#1D associative Array
$emp_age = array("Yogesh"=>20,"Rahul"=>30, "Hritik"=>34,"Lovely"=>20);

echo "Printing the associative 1D array using foreach loop<br>";
foreach ($emp_age as $key => $value) {
    echo"<pre>";
    echo "$key = $value";
    echo"</pre>";
}


#Multidimentional Array
$emp_details=[
    ["Yogesh",20,"Hasanpur","Amroha"],
    ["Rahul",35,"Hasanpur","Amroha"],
    ["Lovely",20,"FromMyHeart","MyBody"],
    ["Himanshu",54,"MBD","MBD"]
];

echo "Printing Multidimentional Array using foreach loop<br>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Name</th><th>Age</th><th>City</th><th>State</th></tr>";
foreach ($emp_details as $value) {
    echo "<tr>";
    foreach($value as $v1){
        echo "<td>".$v1."</td>" ;
    }
    echo "</tr>";
}
echo "<table>";

echo "<br><br>";

#Multidimentional Associative Array
echo "Printing Multidimentional Associaltive array";
$emp_details=[
    ["Name"=>"Yogesh","age"=>20,"city"=>"Hasanpur","Distric"=>"Amroha"],
    ["Name"=>"Rahul","Age"=>35,"city"=>"Hasanpur","Distric"=>"Amroha"],
    ["Name"=>"Lovely","Age"=>20,"city"=>"FromMyHeart","Distric"=>"MyBody"],
    ["Name"=>"Himanshu","Age"=>54,"city"=>"MBD","Distric"=>"MBD"]
];

echo "<pre>";
var_dump($emp_details);
echo "</pre>";


?>