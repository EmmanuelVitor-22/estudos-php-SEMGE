<?php 

    $numeros = [1,6,-8,-54,33,11,-7,14, -9,-1 ];
    $negativo = 0;
    $positivo = 0;
    $par = 0;
    $impar = 0;
    foreach ($numeros as $numero) {
        ($numero < 0) ? $negativo++
                      : $positivo++;

        (($numero % 2) ==0) ? $par++
                            : $impar++;
    }
   
print_r(" A quantidade de numero negativos: $negativo");
echo PHP_EOL;
print_r(" A quantidade de numero positivos: $positivo");
echo PHP_EOL;
print_r(" A quantidade de numeros pares: $par");
echo PHP_EOL;
print_r(" A quantidade de numero impares: $impar");
?>