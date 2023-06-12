<?php 

    require_once "ContaV2.php";
    require_once "Endereco.php";
    require_once "TitularV2.php";
    require_once "CpfV2.php";
    
    $endereco = new Endereco('Salvador', "Babalho", "Rua NSL", "22A");
    $endereco2 = new Endereco('Salvador', "Babalho", "Rua NSL", "12");


    $t1 = new TitularV2(new CpfV2("071.956.755-91"), "Suzan Solza",$endereco);
    $titular = new TitularV2(new CpfV2("078.996.855-96"), "Emmanuel",$endereco);
    $conta= new ContaV2($titular);
    $conta2 = new ContaV2($t1);
    $conta3 =  new ContaV2(new TitularV2(new CpfV2("192.777.185-18"), "Pietra Pires",$endereco2), 12122);

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
    ContaV2::getCountConta();

   
?>