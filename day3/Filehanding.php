<html>
    <body>
        <?php
            //file opreation 

            //create a new file 
            $file= fopen("student.text","w");
            //fclose($file);
            echo "file has been created";
            //write in a new file 
            fwrite($file, "hello student file !! \n this is test file");
             echo"<br> text has been insterted";
            fclose ($file);

            //read a file 
            echo "<br>";
            $file_read= fopen("student.text", "r");
            while(!feof($file_read)) {
                echo fgets($file_read)."<br>";

            }    
             fclose($file_read);
             //deleting a file 
             if (file_exists("student.text")){
                unlink("student.text");
                echo"<br><br>file has been deleted!!";


             }
             else{
                echo"<br><br> file not found";

             }

              















     ?>
     </body>
     </html>

        
    
