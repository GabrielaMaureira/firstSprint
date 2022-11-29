<?php

//Exercise 1
$number = 3;
function isEven ($number){

    if (($number % 2) == 0){
        echo "Even number". "\n";
    }else{
        echo "Odd number". "\n";
    }
}
isEven($number);

//Exercise 2
function functionNoParam () {
    for($i=2; $i<=10; $i=$i+2){
        echo $i. "\n";
    }
}
functionNoParam();

//Exercise 3
$number = 4;
function functionWithParam ($number){
    for($i=0; $i<=$number; $i++){
        echo $i. "\n";
    }
}
functionWithParam($number);

//Exercise 4 
function paramByDefault ($number=10){
    for($i=0; $i<=$number; $i++){
        echo $i. "\n";
    }
}
paramByDefault();

//Exercise 5
$grade = 33;
function checkStudentGrade ($grade){
    if($grade >= 60){
        echo "First division". "\n";
    }else if($grade >= 45){
        echo "Second division". "\n";
    }else if($grade >= 33){
        echo "Third division". "\n";
    }else{
        echo "Suspended". "\n";
    }

}
checkStudentGrade($grade);

//Exercise 6
$varBoolean = rand(true, false);
function isBitten($varBoolean){
    if($varBoolean == true){
        echo "Charlie bit my finger". "\n";
    }else{
        echo "Charlie hasn't bitten my finger". "\n";
    }
}
isBitten($varBoolean);
?>