<?php
#Program 8: PHP OOPs Concepts (inheritence, polymorephism, encapsulation,object, class, abstraction)

//class
class D{
    public $name = "Yogesh";
    public $age = 20;
    //function
    function PD(){
        echo "Name: ".$this->name."<br>";
        echo "Age: ".$this->age."<br>";
    }
}

//object
$details = new D();
//function call
$details->PD();
echo "<br><br>";


//__construct

class details{
    public $name;
    public $age;
    
    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function get_name(){
       return $this->name;
    }

    function get_age(){
        return $this->age;
    }
}
                   
$print = new details("Yogesh", 20);

echo "Name: ".$print->get_name();
echo "<br>";
echo "Age: ".$print->get_age();
echo "<br><br>";


//inheritence 
    //single
    class d1{
        public $name="Yogesh";
        public $age = 20;

        public function get_name(){
            echo $this->name;
        }
    }

    class d2 extends d1{
        public function get_age(){
            echo $this->age;
        }
    }

    $d3 = new d2();
    echo $d3->get_name();
    echo "<br>";
    echo $d3->get_age();
    echo "<br><br>";

    //multiple
   

    echo "PHP doesn’t support multiple inheritance but by using Interfaces in PHP"

?>  