<?php 

    require_once "src/BaseOO/ContaBase.php";
    require_once "src/BaseOO/TitularBase.php";
    require_once "src/BaseOO/CpfBase.php";
    
    $t1 = new TitularBase(new CpfBase("071.956.755-91"), "Suzan Solza");
    $titular = new TitularBase(new CpfBase("078.996.855-96"), "Emmanuel");
    $conta= new Conta($titular);
    $conta2 = new Conta($t1);
    $conta3 =  new Conta(new TitularBase(new CpfBase("192.777.185-18"), "Pietra Pires"), 12122);

    $conta->depositar(1000);
    $conta->tranferir($conta2, 300  );

    var_dump($conta);
    var_dump($conta2);
    var_dump($conta3); 

    
    $conta->sacar(33);
    $conta->depositar(30);
    echo PHP_EOL;

    $conta2->depositar(160);
    var_dump($conta2);
    echo PHP_EOL;
    $conta->tranferir($conta2, 50);
    var_dump($conta);

    echo PHP_EOL;
    echo "Conta 3";
    var_dump($conta3);
    $conta3->depositar(-300);
    var_dump($conta3);
    

   // echo PHP_EOL;
    //echo "conta1 " . PHP_EOL;
    /*var_dump($conta);
        #unset($contaTeste); 
        #unset, nesse caso, destrói o objeto, ao fazer isso ele chama o metodo destrutor
    */
    Conta::getCountConta();

   
?>