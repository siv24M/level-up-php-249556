<?php

function fizzbuzz($i){
 
  if (($i%3 == 0) && ($i%5 == 0)){
   return "FIZZBUZZ";
  }
  elseif (($i%3 == 0) && ($i%5 != 0)){
    return "FIZZ";
  }
  elseif (($i%5 == 0 )&&($i%3 !=0)){
   return "BUZZ";
  }
  else{
   return $i;
  }
}

$n = 1;
while ($n <= 100) {
echo fizzbuzz($n)."<br>";
$n++;
}




