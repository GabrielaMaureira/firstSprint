<?php

//Exercise 1

$limit = 20;
sieveOfEratosthenes($limit);

function sieveOfEratosthenes($limit) {
    
    $primes = array_fill(0, $limit+1, true); 
    
    for ($i = 2; $i <= sqrt($limit); $i++) { 
        if ($primes[$i]) {
            for ($x = $i * $i; $x <= $limit; $x += $i) { // Multiples of 20 change to false which it means it's not a prime nº
                $primes[$x] = false;
                var_dump($primes);
            }
        }
    }
    
}

?>