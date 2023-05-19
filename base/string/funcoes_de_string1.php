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

echo "CONTAR TAMANHO DE STRING - mb_strlen()";
";

// Para corrigir o problema dos caracteres especiais é possivel usar a função mb_strlen()
mb_strlen