<?php 

$arr = [
    "uva",
    "goiaba",
    "maça"
];

#retornar o tamanho do array
echo count($arr);
echo PHP_EOL;
#Obter as chaves de um array
print_r(array_keys($arr));
echo PHP_EOL;
#Obter os valores de um array
print_r(array_values($arr));
echo PHP_EOL;
#Verificar se a chave existe no array (forma 1)
#ps:  se exitir a chave mas ela tiver valor nulo ele entende como false
var_dump(isset($arr[5]));
echo PHP_EOL;
#Verificar se a chave existe no array (forma 2)
#ps:  ela valida até valores nulos
var_dump(array_key_exists(4,$arr));

//VERIFICAR ALGUMAS FUNÇÕES MAIS ATUAIS (MELHORES USADAS EM ARRAY ASSOCIATIVO)



?>