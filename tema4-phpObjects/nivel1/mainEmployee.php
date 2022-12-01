<?php
require("Employee.php");

$employee1 = new Employee("Gabriela", 3000);
echo $employee1->getName(). "\n";
echo $employee1->getSalary(). "\n";
$employee1->print(). "\n";
echo $employee1->setSalary(6500). "\n";
echo $employee1->getSalary(). "\n";
$employee1->print();




?>