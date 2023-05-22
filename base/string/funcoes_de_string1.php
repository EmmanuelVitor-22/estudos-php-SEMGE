<?php

echo "FUNÇÕES DE STRING";
echo PHP_EOL;

echo "CONTAR TAMANHO DE STRING - strlen() ";
//ela conta o bit da string, ou seja, em palavras que possuem caracteres especiais
// nessse caso os caracteres são contabilizados como uma letra
$str = "teste";
$tamPalavraSimples = strlen($str);
$str2 = "ação";
$tamPalavraComCaracteresEspeciais = strlen($str2);
echo PHP_EOL;
echo "$str - $tamPalavraSimples";
echo PHP_EOL;
echo "$str2 - $tamPalavraComCaracteresEspeciais";
echo PHP_EOL;

echo "CONTAR TAMANHO DE STRING sem contabilizar os caracteres especiais - mb_strlen()";
echo PHP_EOL;
// Para corrigir o problema dos caracteres especiais é possivel usar a função mb_strlen()

echo "$str mb_strlen($tamPalavraSimples)";
echo PHP_EOL;
echo "$str2Mb mb_strlen($tamPalavraComCaracteresEspeciais)";
echo PHP_EOL;

echo "colocar todo em caixa alta (probema nos carateres especiais - strtoupper(";
echo PHP_EOL;
$toUpper = strtoupper($str);
$toUpper2 = strtoupper($str2);
echo PHP_EOL;
echo "$str - $toUpper";
echo PHP_EOL;
echo "$str2 - $toUpper2";

// echo PHP_EOL;
// $palavra = "Ação";
// echo "colocar todo em caixa alta (resolve problema nos carateres especiais) - mb_strtoupper(";
// echo PHP_EOL;
// $toUpperMB2 = mb_strtoupper($palavra);
// echo PHP_EOL;
// echo "$palavra - $toUpperMB2";

echo PHP_EOL;

echo "colocar todo em caixa baixa (probema nos carateres especiais - strtolower(";
echo PHP_EOL;
$toUpper = strtolower($str);
$toUpper2 = strtolower($str2);
echo PHP_EOL;
echo "$str - $toUpper";
echo PHP_EOL;
echo "$str2 - $toUpper2";

// echo PHP_EOL;
// $palavra = "Ação";
// echo "colocar todo em caixa baixa (resolve problema nos carateres especiais) - mb_strtolower(";
// echo PHP_EOL;
// $toUpperMB2 = mb_strtolower($palavra);
// echo PHP_EOL;
// echo "$palavra - $toUpperMB2";

echo "STR_REPLACE - Substituir string";
#Replace all occurrences of the search string with the replacement string
echo PHP_EOL;
$frase = "teste replace";
$result =  str_replace("teste","string",$frase);
echo"Frase antes:  $frase";
echo PHP_EOL;
echo"Frase depois:  $result";


echo PHP_EOL;
echo "inverter string";
#Replace all occurrences of the search string with the replacement string
echo PHP_EOL;
$frase = "teste replace";
echo  strrev($frase);

echo PHP_EOL;

echo "embaralhar string";
#Replace all occurrences of the search string with the replacement string
echo PHP_EOL;
$frase = "teste replace";
echo "Frase normal:  $frase " . PHP_EOL;
echo "frase invertida>: " .  str_shuffle($frase);

echo PHP_EOL;


echo "SPLIT";
#Replace all occurrences of the search string with the replacement string
echo PHP_EOL;
$frase = "teste replace";
echo "Frase normal:  $frase " . PHP_EOL;
print_r(  str_split($frase));
print_r(  str_split($frase,2));

echo PHP_EOL;

