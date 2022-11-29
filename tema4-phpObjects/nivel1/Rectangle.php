<?php

class Rectangle extends Shape{
    public function __construct ($base, $height){
        parent::__construct($base, $height);
    }
    public function calculateAre(){
        return ($this->base * $this->height);
    }

}    
?> 