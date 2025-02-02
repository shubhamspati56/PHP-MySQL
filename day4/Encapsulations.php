<html>
    <body>
        <?php
        //Encapsulation 
        class BankAccount{
            private $balance;

            public function setBalance($ammount){
                if($ammount>0){
                    $this->balance = $ammount ;

                }
            }
            public function getBalance(){
                return $this->balance;
            }
        }

        $account = new BankAccount();
        $account->setBalance(200000);
        echo "Account Balance (in Rs): ".$account->getBalance();



        
        ?>
    </body>
  </html>