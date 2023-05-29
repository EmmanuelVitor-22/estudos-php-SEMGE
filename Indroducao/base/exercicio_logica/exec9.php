<?php
    require_once "func_heade_base.php";

    $carros = [
        [
            'modelo' => 'Uno',
            'fabricante' => 'Fiat',
            'cor' => 'prata',
            'portas' => 4,
            'ano' => 2014
        ],
        [
            'modelo' => 'Fiesta',
            'fabricante' => 'Ford',
            'cor' => 'preto',
            'portas' => 2,
            'ano' => 2015
        ],
        [
            'modelo' => 'Doblo',
            'fabricante' => 'Fiat',
            'cor' => 'verde',
            'portas' => 4,
            'ano' => 2013
        ],
        [
            'modelo' => 'Celta',
            'fabricante' => 'GM',
            'cor' => 'preto',
            'portas' => 2,
            'ano' => 2012
        ],
        [
            'modelo' => 'March',
            'fabricante' => 'Nissan',
            'cor' => 'prata',
            'portas' => 2,
            'ano' => 2015
        ],
        [
            'modelo' => 'Corsa',
            'fabricante' => 'GM',
            'cor' => 'branco',
            'portas' => 2,
            'ano' => 2010
        ],
        [
            'modelo' => 'Ranger',
            'fabricante' => 'Ford',
            'cor' => 'prata',
            'portas' => 4,
            'ano' => 2012
        ],
        [
            'modelo' => 'Trail Blazer',
            'fabricante' => 'GM',
            'cor' => 'branco',
            'portas' => 4,
            'ano' => 2014
        ],
        [
            'modelo' => 'Ecosport',
            'fabricante' => 'Ford',
            'cor' => 'preto',
            'portas' => 4,
            'ano' => 2013
        ],
        [
            'modelo' => 'Tucson',
            'fabricante' => 'Hyundai',
            'cor' => 'vinho',
            'portas' => 4,
            'ano' => 2012
        ]
    ];
    
    headerList("Lista", "Modelo", "Ano");
    foreach ($carros as $carro) {
      echo "-----------------------------";
      echo PHP_EOL;
      echo "| modelo: $carro[modelo] | ano :$carro[ano] |" . PHP_EOL;
    }
    echo PHP_EOL;

    headerList("Lista: carros prata");
    foreach ($carros as $carro) {
        if ($carro['cor'] == 'prata' ){
            echo PHP_EOL;
            print_r($carro);
        }
    }
    echo PHP_EOL;

    headerList(" todos os veículos, cor e quantidade de portas");
    foreach ($carros as $carro) {
            echo PHP_EOL;
            print_r($carro);
        
    }
    echo PHP_EOL;

    headerList("veículos da Ford");
    foreach ($carros as $carro) {
        if ($carro['fabricante'] == 'Ford' ){
            echo PHP_EOL;
            print_r($carro);
        }
        
    }
    echo PHP_EOL;

    headerList("fabricação igual ou acima 2013");
    foreach ($carros as $carro) {
        if ($carro['ano'] >= 2013 ){
            echo PHP_EOL;
            print_r($carro);
        }
        
    }
    echo PHP_EOL;



?>