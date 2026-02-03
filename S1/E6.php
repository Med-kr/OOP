<?php 

class BankAccount{
    private $balance = 0;

    public function desposit($amount) {
        $this->balance += $amount;
    }
    public function withdraw($amount) {
        if($this->balance >= $amount){

            $this->balance -= $amount;

            echo 'Votre solde actuel est : '. $this->balance . 'DH';
        } else {
            echo 'votre solde est insufisant';
        }
    }

}

$bankaccount = new BankAccount();

$bankaccount->desposit(4000);
$bankaccount->withdraw(20080);

