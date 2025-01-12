<html>
    <body>
        <?php
          //Control Structures

          //
          $name="yash";
          if($name=="shubham"){
            echo$name." name is correct";
            }
            else{
                echo $name."name is not correct";
            }
          


            //conditional statement if and if---else
            $marks =61;
            
            if($marks >= 80){
                echo "<br> you got grade A";
             }
            elseif($marks >= 60){
                echo "<br> you got grade B";  
            }
            elseif($marks >= 40){
                echo "<br> you got grade c";
            }
             else{
                echo "<br> you got grade D";
             }
             
             //condtional stament switch
             
             $day = "sunday";
             switch($day){
                case "sunday":
                echo "its sunday !!!";
                break;
                case "monday":
                    echo "its monday !!!";
                break;
                case "tuesday":
                echo "its tuesday|||";
                break;
                case "wednesday":
                echo "its wednesday|||";
                break;
                case "thursday":
                echo "its thursday|||";
                break;
                default:
                echo " no matching day found !!";
                }
                 




                // Iteratic control Strucures while loop
                echo "<br>";


                $count =1;
                while($count<=10){
                    echo "<br> count is".$count;
                    $count++;
                    }
                    // Iteratic control Strucures while loop
                echo "<br>";
                $num=1;
                do{
                    echo "<br> do while number is".$num;
                    $num++;

                }
                 while($num <= 3);  
                 //Iteratic control Strucures for loop
                 echo"<br>";
                 for($i=1; $i<=3; $i++){
                    echo "<br> for loop number :". $i;

                 }
                 // Iteratic control Strucures forecho loop
                 echo"<br>";
                 $array=["Red", "green","blue","yellow","pink"];
                 foreach($array as $color){
                    echo "<br> color :".$color;
                 }
                 



                
                
                
                
                
                
             
        ?>

        </body>
        </html>