<?php 
echo "<h1>FUNÇÕES DE ARRAY: ORDENAÇÃO (ARRAY SIMPLES E ASSOCIATIVO)</h1>";
$clientes = [
    "987.654.321-00" => [       
        "nome" => "Maria Souza",
        "telefone" => "(22) 9876-5432"
    ],
    "123.456.789-10" => [
        "nome" => "João da Silva",
        "telefone" => "(11) 1234-5678"
    ],
    "558.654.335-00" => [       
        "nome" => "Maria Souza",
        "telefone" => "(22) 9876-5432"
    ]
];

$clientes2 = [
    "987.654.321-00" => [       
        "nome" => "Maria Souza",
        "telefone" => "(22) 9876-5432",
        "idade" => 44
    ],
    "123.456.789-10" => [
        "nome" => "João da Silva",
        "telefone" => "(11) 1234-5678",
        "idade" => 23
    ],
    "558.654.335-00" => [       
        "nome" => "Maria Souza",
        "telefone" => "(22) 9876-5432",
        "idade" => 33
    ]
];

$clientes3 = [
    "987.654.321-00" => [       
        "nome" => "Maria Souza",
        "telefone" => "(22) 9876-5432",
        "idade" => 44
    ],
    "123.456.789-10" => [
        "nome" => "João da Silva",
        "telefone" => "(11) 1234-5678",
        "idade" => 23
    ],
    "558.654.335-00" => [       
        "nome" => "Maria Souza",
        "telefone" => "(22) 9876-5432",
        "idade" => 33
    ]
];

#Sort an array by key (Ordena um array por chave)
echo "KSORT";
echo PHP_EOL ;

ksort($clientes);
print_r($clientes);
echo PHP_EOL ;

#Sort an array by key in reverse order (Ordena um array por chave na ordem inversa)
echo "KRSORT";
echo PHP_EOL ;
krsort($clientes2);
print_r($clientes2);
echo PHP_EOL ;

#Ordena um array por valores usando uma função de comparação definida pelo usuário
#rdena o valor mas altera as chaves
usort($clientes3, function($a, $b){
    if($a["idade"] == $b["idade"]) return 0;
    return $a["idade"] < $b["idade"] ? 1 :-1; //ordem crescente
    // return $a["idade"] < $b["idade"] ? -1 :1; //ordem decrescente
});


#Ordena um array por valores usando uma função de comparação definida pelo usuário
#rdena o valor e mantém as chaves
uasort($clientes3, function($a, $b){
    if($a["idade"] == $b["idade"]) return 0;
    return $a["idade"] < $b["idade"] ? 1 :-1; //ordem crescente
    // return $a["idade"] < $b["idade"] ? -1 :1; //ordem decrescente
});



//ORDENAÇÃO NATURAL
#
$versoes = [
    "10.1v",
    "2.0v",
    "3.0v",
    "1.0v"
];
echo "se fosse usando sort";
echo PHP_EOL ;
sort($versoes);
print_r($versoes);
echo PHP_EOL ;

echo "NATSORT";
echo PHP_EOL ;
natsort($versoes);
print_r($versoes);
echo PHP_EOL ;


$frutas = [
    "Melancia",
    "banana",
    "laranjas",
    "Abacates"
];
#Ordenar com case sensitive;
#bom se tiver usando frases e precisar fazer validação Case Sensitive
echo "NATCASESORT";
echo PHP_EOL ;
natsort($versoes);
print_r($versoes);
echo PHP_EOL ;
?>