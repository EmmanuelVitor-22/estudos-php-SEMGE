<?php 


include 'funcoes.php';

$todasAsContas = [
    "528.319.050-10"=>[
        "titular" => "Ana Silva",
        "saldo" => 2500.00,
        "conta" => "00123-4"
    ],

    "192.292.880-12"=>[
        "titular" => "João Souza",
        "saldo" => 5000.00,
        "conta" => "01234-5"
    ],

    "950.318.310-30"=>[
        "titular" => "Maria Santos",
        "saldo" => 10000.00,
        "conta" => "12345-6"
    ],

    "785.198.880-20"=>[
        "titular" => "Pedro Oliveira",
        "saldo" => 3500.00,
        "conta" => "23456-7"
    ],

    "293.429.000-03"=>[
        "titular" => "Luciana Costa",
        "saldo" => 7500.00,
        "conta" => "34567-8"
    ]
];



// https://hcode.com.br/blog/passagem-de-parametros-por-valor-e-referencia-no-php/
// video 01 do arquivo : 05 - Referências e mais listas
//gif explicativo
# http://devblog.drall.com.br/excelente-imagem-animada-gif-para-ensinarrepresentar-passagem-de-parametros-por-valorcopia-e-por-referencia

#passagem por valor :o valor informado será alterado apenas no escopo da função. 

function toUpperCaseValor(array $conta){
    $converte= strtoupper($conta["titular"]);
    return $converte;
}
echo toUpperCaseValor($todasAsContas["785.198.880-20"]) . PHP_EOL; //aqui foi atualizado, pois era só uma cópia
echo $todasAsContas["785.198.880-20"]["titular"] . PHP_EOL . PHP_EOL; // aqui mesmo depois de ter feito a mudança na função, ele se manteve

#passagem por referencia: e informarmos uma variável para uma função, o valor dessa variável será alterada no escopo global. Para realizar essa passagem, basta adicionar um & (“E” comercial) antes do parâmetro informado. 

function toUpperCaseReferencia(array &$conta){
    $converte= strtoupper($conta["titular"]);
    return $converte;
}
//echo toUpperCaseReferencia($todasAsContas["293.429.000-03"]) . PHP_EOL; //aqui foi atualizado
// echo $todasAsContas["293.429.000-03"]["titular"]; // aqui depois de ter feito a mudança na função, ele foi atualizado também no array

foreach ($todasAsContas as $conta) {
   echo  toUpperCaseReferencia($conta);
}

echo PHP_EOL;

foreach ($todasAsContas as $conta) {
    echo  $conta["titular"];
 }