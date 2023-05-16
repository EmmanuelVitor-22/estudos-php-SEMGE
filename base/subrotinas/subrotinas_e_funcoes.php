<?php 

include "funcoes.php";
#aula 02 - subrotinas da alura php
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

// != entre subrotina e função:
// -SUBROTINA = executa o codigo dentro da função e não devolve valor nenhum
// - FUNÇÃO -  executa o codigo dentro da função e devolve um valor

echo "Antes do saque: {$todasAsContas["785.198.880-20"]["titular"]} -> {$todasAsContas[ "785.198.880-20"]["saldo"] }" . PHP_EOL;
$todasAsContas[ "785.198.880-20"] = sacar($todasAsContas[ "785.198.880-20"],0.01);
echo "Pós saque: {$todasAsContas["785.198.880-20"]["titular"]} -> {$todasAsContas[ "785.198.880-20"]["saldo"] }" . PHP_EOL . PHP_EOL;

foreach ($todasAsContas as $cpf => $conta) {
    // No caso de strings complexas, o array associativo funciona sem usar as aspas (somente em casos de string);
    exibirMensagem( "$cpf -> $conta[titular] -> R$ $conta[saldo]");
}