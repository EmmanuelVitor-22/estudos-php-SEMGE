<?php 

$numeros = [1,6,-8,-54,33,11,-7,14, -9,-1];
$numeros2 = [99,6,8,10,12,11,7,14, 5,9];


foreach ($numeros as $numero) {
    foreach ($numeros2 as $numero2) {
        
       print_r("$numero * $numero2  = " 
            . (($numero * $numero2) ) . PHP_EOL
        );
    }
}


?>