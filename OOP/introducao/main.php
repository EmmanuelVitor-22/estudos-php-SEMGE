<?php 

require_once "src/Conta.php";

$conta = new Conta("040428", "Emm", 10000);
$conta2 = new Conta("8777", "sdsds", 230);


$conta->sacar(33);
$conta->depositar(30);
echo PHP_EOL;

var_dump($conta);
$conta2->depositar(160);
var_dump($conta2);
echo PHP_EOL;
$conta->tranferir($conta2, 50);
var_dump($conta);

?>