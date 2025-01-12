<html>
    <body>
        <?php
        //functions

        //without parmeter function
        function firstFunction(){
            echo "Hello World !";

        }
        firstFunction();
        //with parameter function 
        function greet ($name){

        }
        greet("class");
        //with Default parameter function 
        function defaultparameter ($name = "Guest"){
            echo "<br> hello " .$name;

        }
        defaultparameter("Defaulut parameter !");

         // fucntion that returns a value 
         function multiply ($a, $b){
            return $a*$b;
            }
            $result = multiply(8,9);
            echo "<br>" .$result;

          // fucntion by value Example
           function addten ($num){
            $num += 10;
            echo "<br> Original value :" . $num;
            } 
             $x=5;
             addten($x);
             echo "<br> orignal value :" .$x;
             echo "<br>";
             // fucntion by Reference Example
           function addtenbyrefer ($num){
            $num += 10;
            echo "<br> Function value :" . $num;
            }
            $y=5;
            addtenbyrefer($y);
            echo "<br> Orignal value :" . $y;

            //Early Returning the vlues in Function(canditional Return)
            Function checkEvenodd($num){
                if($num % 2 ==0){
                    return "Even";
                }
                return "odd";
            }
                echo "<br>";
            echo checkEvenodd(18);
            echo "<br>";
           echo checkEvenodd(15);

         ?>
         </body>
            </html>
