<html>
    <body>
      <?php
        //cookies
        session_start();
        $_SESSION["username"]="john";
        $_SESSION["role"]="hacker";
        echo " session has been created ! <br> ";
        
        // Accending Session Variables 
        if(isset($_SESSION["username"])){
            echo " Welcome ".$_SESSION["username"];

        } 
        else{
            echo "NO active session found ! <br> ";
        }

        // Destroying/killing/terminating the session 
        session_unset();
        session_destroy();
        echo "<br> session has been terminated ! <br>";

        if(isset($_SESSION["username"])){
            echo " Welcome ".$_SESSION["username"];

        } 
        else{
            echo "NO active session found !  ";
        }








      ?>
  </body>
</html>  