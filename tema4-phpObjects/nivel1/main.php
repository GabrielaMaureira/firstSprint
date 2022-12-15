<?php
require("Shape.php");
require("Triangle.php");
require("Rectangle.php");


$triangle1 = new Triangle(8,8);
$rectangle1 = new Rectangle(3,2);

echo $triangle1->calculateArea(). "\n";
echo $rectangle1->calculateArea();



?>