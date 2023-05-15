<?php



// Faça um programa, com uma função que necessite de um argumento.
//  A função retorna o valor de caractere ‘P’, se seu argumento for positivo, e ‘N’, se 
//  seu argumento for zero ou negativo.

function retornarValor($valor){

   return $valor>=0 ? "P" : "N" ;
}

$v1 = retornarValor(2);
$v2 = retornarValor(0);
$v3 = retornarValor(-1);

echo $v1;
echo $v2;
echo $v3;
echo PHP_EOL;

// Faça um programa com uma função chamada somaImposto.
//  A função possui dois parâmetros formais: taxaImposto, que
// é a quantia de imposto sobre vendas expressa em porcentagem e custo, que é o custo de um item antes do imposto.
// A função “altera” o valor de custo para incluir o imposto sobre vendas.




function somaImposto($taxaImposto,$custo ){
   $taxaImposto= ($taxaImposto/100);
    return $custo *= $taxaImposto;
}
echo somaImposto(300,2);