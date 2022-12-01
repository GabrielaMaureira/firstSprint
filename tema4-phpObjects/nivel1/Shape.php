<?php

abstract class Shape {
 //properties
 protected $base;
 protected $height;
//methods
 public function __construct ($base, $height){
    $this->base = $base;
    $this->height = $height;
}
abstract public function calculateArea();
}


?>