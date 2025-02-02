<html>
    <body>
        <?php
        //inheritence
        class animal{
            public function makesound(){
                return "some generic sound";

            }
        }
        class cat extends animal{
            public function makesound(){
                return "meeow <br> ";

            }
        }
        class dog extends animal{
            public function makesound(){
                return "bark <br>";
            }
        }
        $dog =new dog ();
        echo $dog->makesound();
        $cat=new cat();
        echo $cat->makesound();
        ?>
        </body>
        </html>
