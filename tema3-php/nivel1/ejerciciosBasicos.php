<!DOCTYPE html>
<html>
<body>

<h1>Sprint 1</h1>

<?php
echo "<p><h1>Exercise 1</h1></p>";
$varInt = 2;
$varDouble = 2.4;
$varString = "Hello";
$varBool = true;

var_dump($varInt, $varDouble, $varString, $varBool);

echo "<p><h1>Exercise 2</h1></p>";
$message = 'Hello, World';
echo "Mensaje: " .$message. "<br>";
echo "Upper Case: ".strtoupper($message). "<br>";
echo "Length: ".strlen($message). "<br>";
echo "Reverse: ".strrev($message). "<br>";
$message2 = 'Aquest és el curs de PHP';

echo "Concatenation: ".$message ." ". $message2. "<br>";

echo "<p><h1>Exercise 3</h1></p>";
define("NAME", "Gabriela Maureira");
echo "<h1> ".NAME." </h1>";

echo "<p><h1>Exercise 4</h1></p>";
$x = 2; $y = 4; $n = 2.2; $m = 4.4;
//variables x  y
echo "Variable x : ".$x. " Variable y : " .$y. "<br>";

echo "Suma: ".$x + $y. "<br>";
echo "Resta: ".$x - $y. "<br>";
echo "Producto: ".$x * $y. "<br>"; 
echo "Módulo: ".$x % $y. "<br>";

//variables n  m
echo "Variable n : ".$n. " Variable m : " .$m. "<br>";
echo "Suma: ".$n + $m. "<br>";
echo "Resta: ".$n - $m. "<br>";
echo "Producto: ".$n * $m. "<br>"; 
echo "Módulo: ".$n % $m. "<br>";

echo "Múltiples de 2";
echo $x*2; 
echo $y*2;
echo $n*2;
echo $m*2;

echo $x+$y+$n+$m; 
echo $x*$y*$n*$m; 

echo "<p><h1>Exercise 5</h1></p>";

$array1=array(1,2,3,4,5);
$array2=array(6,7,8);
$array2[]=20;
$arrayMix = array_merge($array1, $array2);
echo "Mida de l'array: ". count($arrayMix). "<br>";
echo var_dump ($arrayMix);


?>
</body>
</html>