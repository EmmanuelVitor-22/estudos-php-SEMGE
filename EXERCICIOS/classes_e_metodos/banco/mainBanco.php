<?php

    namespace banco;
    require_once "ContaCorrente.php";
    use banco\ContaCorrente;

    $contaCorrenteEspecial = new \banco\ContaCorrente(7779,true, 500);
    var_dump($contaCorrenteEspecial);
    echo PHP_EOL . PHP_EOL;
    echo PHP_EOL . PHP_EOL;
    $contaCorrente = new ContaCorrente(7788,false);
    var_dump($contaCorrente);

    echo "----------- Conta corrente ESPECIAL -----------";
    echo PHP_EOL ;

    echo "----------- Deposito -----------";
    echo PHP_EOL;
    $depositar = $contaCorrenteEspecial->depositar(2000);
    echo("valor de depoisto: ". $contaCorrenteEspecial->getSaldo());
    //ou pode ser assim echo("valor de depoisto: ". $depositar);
    echo PHP_EOL . PHP_EOL;

    echo "----------- Saque -----------";
    echo PHP_EOL ;
    $saque = $contaCorrenteEspecial->saque(100);
    print_r($saque);
    echo PHP_EOL . PHP_EOL;

    echo "----------- Conta corrente NORMAL -----------";
    echo PHP_EOL . PHP_EOL;

