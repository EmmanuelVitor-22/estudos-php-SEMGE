<?php 

$numeros = [1,6,-8,-54,33,11,-7,14, -9,-1 ];
$numMultiplicador = 2;

$numerosDouble = array_map(fn($num)=>
    $numMultiplicador*$num,$numeros);

print_r($numerosDouble);
?>