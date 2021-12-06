<?php

$array=[1,2,3,4,5];

$random_number = rand(1,5); 

if ($random_number ===1) {
    $result ='大吉';
} else if ($random_number ===2) {
    $result ='中吉';     
} else if ($random_number ===3) {
   $result ='小吉'; 
} else if ($random_number ===4) {
   $result ='凶';  
} else if ($random_number ===5) {
    $result='大凶'; 
}

//var_ramp($array); 
//echo $array; 
//exit(); 

?>
