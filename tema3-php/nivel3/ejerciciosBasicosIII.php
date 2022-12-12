<?php
//Exercise 1 
$stringToArray = "Hello World";
$stringToArray = str_replace(' ', '', $stringToArray);
var_dump (str_split($stringToArray));

//Exercise 2
$array = array (2,
                3,
                2,
                "hello",
                "hello");
var_dump (array_count_values($array));


//Exercise 3
$numbers = array (10, 
                20, 
                30, 
                40, 
                50);
var_dump($numbers);
array_splice($numbers, 3, 1);
var_dump($numbers);

?>