<?php

//Exercise 1
echo "Olympic Games from 1960 to 2016: \n";
$yearFrom = 1960;
$yearTo = 2016;

function listOfOlympicGames ($yearFrom, $yearTo){
  for($i=$yearFrom; $i<=$yearTo; $i+=4){
      return  $i;
  }
}

//Exercise 2
$minutes = 4;

function callPrice ($minutes){
if($minutes >3){
    echo "Call price: " .$price = ($minutes-3)*0.05+0.10. "\n";
}else{
    echo "Call price: " .$price = 0.10. "\n";
}
}

//Exercise 3
$chocolate = 2;
$bubbleGum = 1;
$candy = 1;

function totalChocolates($chocolate){
  return  $chocolate * 1;
}
function totalBubbleGums($bubbleGum){
  return  $bubbleGum * 0.5;
}
function totalCandys($candy){
   return $candy * 1.5;
}
echo "Total for the sweets: " .$total = totalChocolates($chocolate) + totalBubbleGums($bubbleGum) + totalCandys($candy). "€ \n";





?>