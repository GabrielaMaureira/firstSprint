<?php
class Account{
    //properties
    protected $accountNumber;
    protected $name;
    protected $lastName;
    protected $amount;

    //methods
    public function __construct ($name, $lastName){
        $this->accountNumber = 1234; // rand(x,y); 
        $this->name = $name;
        $this->lastName = $lastName;
        $this->amount = 0;
    }
    
    public function deposit ($amount){
        return $this->amount += $amount;
    }
    public function withdraw ($amount){
        if($this->amount < $amount){
            echo "Not enough money";
        }else{
           echo $this->amount -= $amount;
        }
    }

    
    public function getAccountNumber(){
        return $this->accountNumber;
    }
    public function setAccountNumber($accountNumber){
        $this->accountNumber = $accountNumber;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    public function getAmount(){
        return $this->amount;
    }
    public function setAmount($amount){
        $this->amount = $amount;
    }
}










?>