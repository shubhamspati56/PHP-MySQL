<html>
    <body>
        <?php
        //classes and objects
        class car{
            public $brand; //property of the car
            public $color;//property of the car 
            //private
            //protected
            public function startEngine(){  
                //method 
                return "The engine is starting...ziuu ziuu zuiiii zuuuuu.";

            }
        }
        //create an object 
        $car = new Car();
        $car-> brand = "Mercedes";
        $car-> color = "Black";
        echo "Car Brand: ".$car->brand."<br>";
        echo $car ->startEngine();