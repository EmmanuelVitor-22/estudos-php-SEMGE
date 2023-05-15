<?php 
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

function exibirMensagem(String $msg){
    echo $msg . PHP_EOL;
}

#função de deposito
// é bom tipar os parametros da função para garanti integridade
// e tipar a função com o tipo do retorno dela

function depositar( array $conta, float $valorDeDeposito):array{
    if ($valorDeDeposito > 0 ) {
        $conta["saldo"] +=$valorDeDeposito;
    }
    else{
        exibirMensagem("Não pode depositar nada ou valor negativo.");
    }
        return $conta;

}

$todasAsContas["293.429.000-03"] = depositar($todasAsContas["293.429.000-03"], 1003);
echo $todasAsContas["293.429.000-03"]["saldo"] ;

foreach ($todasAsContas as $cpf => $conta) {
    exibirMensagem( $cpf . " " . $conta["titular"] . " R$" . $conta["saldo"]);
}