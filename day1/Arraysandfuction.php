<html>
    <body>
        <?php
        //Arrays and fuctions

        //Arrays indexed
        $frutis= ["Banana","apple", "cherry", "orange"];
        echo "selected Fruit :" . $frutis[1];

        foreach($furtis as $fruit){
            echo "<br> fruit :" . $fruit ;

        }
        // associative arrays
        echo "<br>";
        $ages =["john" => 25, "raj "=> 18, "alice"=>22 ];
        echo "<br> selected age :".$ages["Alice"];
        foreach($ages as $name => $age ){
            echo "<br>" . $name. "is" . $age. "years old.";
         }
         //multi dimensional arrays
         echo "<br>";
         $students =[
            ["john", 25, false],
            ["raj", 22, true],
            ["alice ", 22,false],
            ];
            echo"<br> student 1 is present in the class :". $students [0][2];
               //array manipulation
               $classroom = ["stuart","ben", "rick"]

               //adding element 
               echo "<br>"; 
               $classroom []="alen";
               array_push($classroom as ,"xavier" );
               foreach($classroom as $student ){
                echo"<br> student:". $student;
            }
            //uploding
            echo"<br>";
            foreach($classroom as $student){
                echo"<br> student :". $student; 

                 // Re-indexing Elements
        $classroom = array_values($classroom);
        echo "<br>";
        print_r ($classroom);
        }


















        ?>
      </body>
</html>
                
            
            
            
            