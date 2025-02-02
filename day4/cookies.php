<html>
    <body>
        <?php

     //cookies

     
     //set a cookie
     $cookieName ='langepreference';
     $cookieValue = 'French';
     $cookieExpire = time()+ (60);

     setcookie($cookieName, $cookieValue, $cookieExpire,"/");
     echo "cookie has been set !";

     //Accessing the cookie 
     if(isset($_COOKIE[$cookieName])){
        echo " <br> Your language preference is : ". $_COOKIE[$cookieName];

     }
     else{
        echo " <br> Cookie is not set ! ";
     }
     // Deleting cookie or block the cookie 
     setcookie($cookieName, $cookieValue, time()-(30),"/");
     echo "<br> Cookie has been deleted ! ";


        ?>
    </body>
 </html>