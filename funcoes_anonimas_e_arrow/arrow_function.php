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


    echo PHP_EOL;
    echo "Trabalhando com ARROW FUNCTIONS utilizando em array: \n\n";

    $arrowFunctions = [
        "apenasNumero" => fn($txt)=> (preg_replace('/\D/', '', $txt)),
        "apenasMaiusculas" => fn($txt) => preg_replace('/[^A-Z]/', '',$txt),
        "apenasMinusculas" => fn($txt) => preg_replace('/[^a-z]/', '',$txt)

    ];

    print_r($arrowFunctions["apenasNumero"]("Ano 2022"));
    echo PHP_EOL;
    print_r($arrowFunctions["apenasMaiusculas"]("Ano 2022"));
    echo PHP_EOL;
    print_r($arrowFunctions["apenasMinusculas"]("Ano 2022"));
    echo PHP_EOL;

    echo "Trabalhando com funções nomeadar que tem como retorno uma ARROW FUNCTIONS: \n\n";

    function pegarFuncoesArrow($opcao){
        if ($opcao == 1 ) {
            return fn($txt)=> (preg_replace('/\D/', '', $txt));
        } elseif ($opcao == 2) {
            return fn($txt) => preg_replace('/[^A-Z]/', '',$txt); 
        } else {
            return fn($txt) => preg_replace('/[^a-z]/', '',$txt);
        }   
    }

    echo pegarFuncoesArrow(1)("Lana 234");
    echo PHP_EOL;
    echo pegarFuncoesArrow(2)("Lana 234");
    echo PHP_EOL;
    echo pegarFuncoesArrow(3)("Lana 234");
    echo PHP_EOL;

    echo PHP_EOL;
?>