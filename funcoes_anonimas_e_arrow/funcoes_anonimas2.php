<?php 
    echo "TRABALHANDO COM FUNÇÕES ANONIMAS PT: II";
    echo PHP_EOL;
    echo "Trabalhando com funções anonimas, diretamente e utilizando em array: \n\n";

    echo "Trabalhando com funções anonimas, diretamente: \n\n";
    $formatarTexto = function($texto){
        return mb_strtoupper($texto);
    };

    print_r($formatarTexto("Luna"));

    echo PHP_EOL;

    echo "Trabalhando com funções anonimas utilizando em array: \n\n";

    $funcoes = [
        "upperCase" => function($txt){
            return mb_strtoupper($txt);
        },
        "lowerCase" => function($txt){
            return mb_strtolower($txt);
        },
        "hideText" => function($txt){
            return str_pad("",strlen($txt), "?");
        }
    ];

    print_r($funcoes["upperCase"]("teste"));
    echo PHP_EOL;
    print_r($funcoes["lowerCase"]("teste"));
    echo PHP_EOL;
    print_r($funcoes["hideText"]("teste"));
    echo PHP_EOL;

    echo "Trabalhando com funções nomeadar que tem como retorno uma função anônima: \n\n";

    function pegarFuncoes($opcao){
        if ($opcao == 1 ) {
            return function($txt){
                return mb_strtoupper($txt);
            };
        } elseif ($opcao == 2) {
            return function($txt){
                mb_strtolower($txt);
            }; 
        } else {
            return function($txt){
                return str_pad("",strlen($txt), "?");
        };
    }
}
    

echo pegarFuncoes(1)("Lana");











?>