<?php 

$conta0 = [
    "titular" => "Ana Silva",
    "saldo" => 2500.00,
    "conta" => "00123-4"
];

$conta1 = [
    "titular" => "João Souza",
    "saldo" => 5000.00,
    "conta" => "01234-5"
];

$conta2 = [
    "titular" => "Maria Santos",
    "saldo" => 10000.00,
    "conta" => "12345-6"
];

$conta3 = [
    "titular" => "Pedro Oliveira",
    "saldo" => 3500.00,
    "conta" => "23456-7"
];

$conta4 = [
    "titular" => "Luciana Costa",
    "saldo" => 7500.00,
    "conta" => "34567-8"
];

$todasAsContas = [$conta0,
                  $conta1, 
                  $conta2, 
                  $conta3, 
                  $conta4
];

foreach($todasAsContas as $conta){
    echo $conta["titular"] . PHP_EOL;
}
?>