<?php
class Employee{
    //properties
    private $name;
    private $salary;

    //methods
    public function initialize ($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }
    
    public function print(){ 
        if($this->salary >6000){
            echo  "$this->name  must pay taxes";
        }else{
            echo  "$this->name  must not pay taxes";
        }
    }
}







?>