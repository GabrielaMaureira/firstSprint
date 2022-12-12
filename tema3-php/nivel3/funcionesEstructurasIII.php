<?php

//Exercise 1

$number = 2;
isPrimeNumber($number);

function isPrimeNumber ($number){
    $isPrime = false;
    for($i=2; $i<=$number; $i++){
       if(($number%2)!=0 || $number == 2){
            $isPrime = true;
       }

    }
    
    if($isPrime){
        echo $number. " is a prime number \n"; 
    }else{
        echo $number. " is not a prime number \n";
    }
}   


?>