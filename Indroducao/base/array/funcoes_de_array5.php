<?php 
echo "<h1>FUNÇÕES DE ARRAY: MANIPULAÇÃO DE DADOS</h1>";


$numeros = [
   1, 2, 3,
   6, 8, 4,7,
   5, 6, 7, 8, 9
];
#Removes duplicate values from an array( ou seja, mostra apenas os elementos não repetidos dentro de um array);
#utilizado muito quando precisar fazer ações unicas
echo "array_unique()";
echo PHP_EOL ;
print_r(array_unique($numeros) );
echo PHP_EOL ;

$pessoas = [
    "123.456.789-88" => [
            "nome"=> "Emma",
            "idade"=> 24,
            "intagram"=> null
        ],
    "122.456.789-88 " => 0,
    "122.456.689-88 " => false,
    "122.456.789-77 " => null

];

#filtrar array
#bom para evitar dados "sujos"
echo "array_filter()";
echo PHP_EOL ;
print_r(array_filter($pessoas));
print_r(array_filter($pessoas["123.456.789-88"]) );
echo PHP_EOL ;

$pessoas2 = [
        "nome"=> "Emma",
        "idade"=> 24,
        "intagram"=> null,
        "new" => 0,
        "novo" => false,
        "teste" => null

];
//PS: É POSSIVEL CRIAR FILTROS PROPRIOS. Exemplo:
echo "Usando função";
 $filter = array_filter($pessoas2, function($value){
    // podem ser validado por diversas formas, não só por verificação de nulo
    //usado tbm por array multidimensionais 
    return !is_null($value);
     });
 print_r($filter);
echo PHP_EOL ;
echo "ARRAY_INTERSECT";
#Computes the intersection of arrays(Calcula a interseção de arrays)
$palavra = "teste";
$palavra2 = "teste2";
$inter = array_intersect(str_split($palavra), str_split($palavra2));
print_r( $inter);
echo PHP_EOL ;


echo "Para juntar dois ou mais arrays é usar o array_merge";
?>