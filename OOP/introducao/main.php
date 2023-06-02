<?php 

require_once "src/Conta.php";

$conta = new Conta("040428", "Emm");
$conta2 = new Conta("8777", "sdsds");

$conta->depositar(1000);
$conta->tranferir($conta2,300);
var_dump($conta);
var_dump($conta2);

$chama =  new Conta("04i2042", "sdfofodfndonfodnfodno", 12122);
var_dump($chama);

#unset($contaTeste); #unset, nesse caso, destrói o objeto, ao fazer isso ele chama o metodo destrutor

/*
$conta->sacar(33);
$conta->depositar(30);
echo PHP_EOL;

$conta2->depositar(160);
var_dump($conta2);
echo PHP_EOL;
$conta->tranferir($conta2, 50);
var_dump($conta);

echo PHP_EOL;
echo "Conta 3";
var_dump($conta3);
$conta3->depositar(-300);
var_dump($conta3);
*/
?>