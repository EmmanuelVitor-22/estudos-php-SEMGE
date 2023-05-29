<?php 
echo "<h1>FUNÇÕES DE ARRAY: ORDENAÇÃO (ARRAY SIMPLES)</h1>";

$array = [
    "uva",
    "goiaba",
    "maça"
];


$array2 = [
    "uva",
    "goiaba",
    "maça", 
    "pera"
];

$array3 = [
    "uva",
    "goiaba",
    "pera",
    "maça" 
];

$array4 = [
    "uva",
    "goiaba",
    "pera",
    "maça" 
];
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

#ordenar array de forma crescente
#ela ordena o valor mas altera as chaves
print_r( $array);
echo PHP_EOL ;
sort($array);
print_r( $array);

#ordenar array de forma crescente
#ela ordena o valor e mantém as chaves
print_r( $array2);
echo PHP_EOL ;
asort($array2);
print_r( $array2);


#ordenar array de forma decrescente
#ela ordena o valor mas altera as chaves
print_r( $array3);
echo PHP_EOL ;
rsort($array3);
print_r( $array3);

#ordenar array de forma decrescente
#ela ordena o valor e mantém as chaves
print_r( $array4);
echo PHP_EOL ;
arsort($array4);
print_r( $array4);


?>