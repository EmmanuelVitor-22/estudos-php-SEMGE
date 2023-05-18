<?php 
echo "<h1>FUNÇÕES DE ARRAY: </h1>";

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

echo PHP_EOL;
echo PHP_EOL;
//VERIFICAR ALGUMAS FUNÇÕES MAIS ATUAIS (MELHORES USADAS EM ARRAY ASSOCIATIVO)
//inicio
$clientes = [
    "123.456.789-10" => [
        "nome" => "João da Silva",
        "telefone" => "(11) 1234-5678"
    ],
    "987.654.321-00" => [       
        "nome" => "Maria Souza",
        "telefone" => "(22) 9876-5432"
    ]
];

#verificar primeira posição:
   echo "Primeira chave:  " . array_key_first($clientes);
   echo PHP_EOL;
   echo "Ultima chave:  " . array_key_last($clientes);

//fim 

#inverter chaves e valores dos arrays
echo PHP_EOL;
print_r(array_flip($arr));
echo PHP_EOL;


#separando array por algum tipo de separador 
#$ implod:Join array elements with a string; Basicamente você tranforma o array em uma string
//recebe dois parametros, o separador e o array
echo implode(' - ', $arr);
echo PHP_EOL;

#converter uma string num array
// criar array a partir de string
// o separador some da string, nessa função
print_r( explode(' ', "teste"));
echo PHP_EOL;
print_r( explode(' ', "teste de pratica"));
echo PHP_EOL;
print_r( explode(' , ', "teste, onte, pratica"));
echo PHP_EOL;
print_r( explode('e', "teste, onte, pratica"));
echo PHP_EOL;
?>