<?php 

$arr = [
    "uva",
    "goiaba",
    "maça"
];


$arr2 = [
    "uva",
    "goiaba",
    "maça", 
    "pera"
];

$arr3 = [
    "uva",
    "goiaba",
    "pera",
    "maça" 
];

$arr4 = [
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
print_r( $arr);
echo PHP_EOL ;
sort($arr);
print_r( $arr);

#ordenar array de forma crescente
#ela ordena o valor e mantém as chaves
print_r( $arr2);
echo PHP_EOL ;
asort($arr2);
print_r( $arr2);


#ordenar array de forma decrescente
#ela ordena o valor mas altera as chaves
print_r( $arr3);
echo PHP_EOL ;
rsort($arr3);
print_r( $arr3);

#ordenar array de forma decrescente
#ela ordena o valor e mantém as chaves
print_r( $arr4);
echo PHP_EOL ;
arsort($arr4);
print_r( $arr4);


?>