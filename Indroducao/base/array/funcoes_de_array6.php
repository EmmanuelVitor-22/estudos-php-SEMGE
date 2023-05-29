<?php 
echo "ARRYA_SHIFT";
#Retira o primeiro elemento de um array
#array_shift() retira o primeiro elemento de array e o retorna, diminuindo array em um elemento e movendo todos os outros elementos para trás. Todas as chaves numéricas serão alteradas para começar a contar a partir de zero, enquanto chaves literais não serão afetadas.
#Lembra uma fila(fifo) priemiro a entrar é o primeiro a sair
$cesta = ["laranja", "banana", "melancia", "morango"];
print_r($cesta);
$fruta = array_shift($cesta);
print_r($cesta);
echo PHP_EOL;

echo "ARRYA_UNSHIFT";
#array_unshift — Adiciona um ou mais elementos no início de um array
#array_unshift() adiciona os elementos passados como argumentos no início de array. Note que a lista de elementos é adicionada como um todo, de forma que eles ficam na mesma ordem. Todas as chaves numéricas serão modificadas para começar a contar de zero enquanto chaves literais permanecerão inalteradas.
array_unshift($cesta,"uva");
print_r($cesta);
echo PHP_EOL;

echo "ARRYA_POP";
#array_pop — Extrai um elemento do final do array
#array_pop() extrai e retorna o valor do último elemento de array, diminuindo o array em um elemento.
#Lembra uma pilha (LIFO) onde o ultimo a entrar é o primeiro a sair
array_pop($cesta);
print_r($cesta);
echo PHP_EOL;

echo "ARRYA_PUSH";
#array_push — Adiciona um ou mais elementos no final de um array
#array_push() trata array como uma pilha, e adiciona as variáveis passadas como argumentos no final de array. O tamanho do array aumenta de acordo com o número de variáveis adicionadas. Tem o mesmo efeito de: $array[] = $var;
#Lembra uma pilha (LIFO) onde o ultimo a entrar é o primeiro a sair
array_push($cesta, "manga", "batata");
print_r($cesta);
echo PHP_EOL;

echo "Unset";
#apagar valores de um array
#unset() destrói a variável especificada.
#O comportamento de unset() pode variar dentro de uma função dependendo do tipo de variável que você está tentando destruir.
#Se utilizar unset() em uma variável global dentro de uma função, somente a variável local será destruída. A variável no ambiente que foi chamada terá o mesmo valor como antes da execução de unset().
unset($cesta[3]);
print_r($cesta);
echo PHP_EOL;


echo "Unset";
#array_map — Aplica uma função em todos os elementos dos arrays dados

#geralmente se que formatar (de alguma forma) todos os elementos de um array, sem precisar usar laço

#array_map() retorna um array contendo os resultados da aplicação do callback ao valor correspondente do array (e arrays se mais arrays forem fornecidos) usados como argumentos para a função de callback. O número de parâmetros que a função callback aceita deve coincidir com o número de arrays passados para array_map(). Arrays de entrada excedentes são ignorados. Um ArgumentCountError é lançado se um número insuficiente de argumentos é fornecido.
$resultMap =  array_map(function($value){
    return strtoupper($value);
},$cesta);

print_r($resultMap);
?>