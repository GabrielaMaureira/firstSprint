<?php
class Employee{
    //properties
    private $name;
    private $salary;

    //methods
    public function __construct ($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    
    public function print(){ 
        if($this->salary >= 6000){
            echo  "$this->name  must pay taxes";
        }else{
            echo  "$this->name  must not pay taxes";
        }
    }
}







?>