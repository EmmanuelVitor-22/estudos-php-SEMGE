<?php 

    echo "TRABALHANDO COM FUNÇÕES ARROW FUNCTIONS";
    // Arrow functions tem a forma básica fn (argument_list) => codigo.
    //Arrow functions possuem a mesmas características das funções anônimas, exceto que o uso de variáveis do escopo pai é sempre automático.Ou seja, consegue pegar variáveis do escopo global.


    $numeros = [12,10, 15, 20, 22, 56,70,91,95, 100];
    print_r($numeros);
    echo PHP_EOL;
    echo "Usando uma arrow function diretamente;
    \n\n";
    $multiplo = 2;    
    $filtrados = array_filter($numeros, fn($item) => $item % $multiplo == 0 );

    echo PHP_EOL;
    echo "Usando uma arrow function atribuida a uma variavel;
    \n\n";
    
    $filtrados = array_filter($numeros, fn($item)=> $item%2 == 0 );
?>