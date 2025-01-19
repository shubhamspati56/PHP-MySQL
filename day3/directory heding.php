<html>
    <body>
        <?php
          //directory handling opertions

          //create a directory
          if(!is_dir( "phpDay3_directory")){
            mkdir("phpday3_directory");
            echo"directory Created";


          }
           else{
            echo"Directory already exists !";
           }
           echo "<br>";
           //check if the directory exist
           if(is_dir("phpday3_directory")){
            echo "directory exists";

           }
          else{
            echo "directory does not exists !";

          }
          echo "<br>";
          //list the files inside the folder
          $files = scandir("phpday3_directory"); 
          foreach($files as $file){
            echo $file."<br>";

          }  
          echo "<br>";
          //change the directory 
          echo "current directory :".getcwd();
          chdir("phpday3_directory");
          echo "<br> new current Directory:". getcwd();
          echo "<br>";
          //delete the files inside the directory
          $delete_files = scandir(".");
          foreach($delete_files as $file){
            if ($file!=="."&& $file==".."){
                unlink($file);

            }
            echo "files deleted !";

          }
          echo "<br>";
          //delete  directory
          echo "<br> current Directory:" .getcwd();
          if(is_dir ("phpDay3_directory")){
            rmdir("phpDay3_directory ");
                
            echo"<br> directory removed";
                
          }
            else{
                echo"directory does not exists!";
            } 
        ?>
        </body>
        </html> 
                                            