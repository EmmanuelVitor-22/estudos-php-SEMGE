<?php 

    require_once "resources/resources.php";


    $maria = new Pessoa (new CpfV2("071.956.755-91"), "Maria Solza");
    $joao = new Pessoa (new CpfV2("078.996.855-96"), "Joao Nunes");
    $jose = new Pessoa (new CpfV2("192.777.185-18"), "José Pires");

    $endereco = new Endereco('Salvador', "Babalho", "Rua NSL", "22A");
    $endereco2 = new Endereco('Salvador', "Babalho", "Rua NSL", "12");

    $titularMaria = new TitularV2($maria,$endereco);
    $titularJoao = new TitularV2($joao,$endereco);
    $titularJose = new TitularV2($jose, $endereco2);


    $contaMaria= new ContaV2($titularMaria);
    $contaJoao = new ContaV2($titularJoao);

    $contaJose =  new ContaV2($titularJose);

    $contaJose->depositar(30000);
    //$contaJose->tranferir($contaMaria, 10.000);
    //$contaJose->tranferir($contaJoao, 10.000);

    echo "Conta de: Maria";
    echo PHP_EOL;
    var_dump($contaMaria);
    echo PHP_EOL;
    echo "Conta de: Joao";
    echo PHP_EOL;
    var_dump($contaJoao);
    echo PHP_EOL;
    echo "Conta de: José";
    echo PHP_EOL;
    var_dump($contaJose); 
    echo PHP_EOL;

    echo $contaJose->getSaldo();
    
    echo PHP_EOL;
    
    
    // $conta->sacar(33);
    // $conta->depositar(30);
    // echo PHP_EOL;

    // $conta2->depositar(160);
    // var_dump($conta2);
    // echo PHP_EOL;
    // $conta->tranferir($conta2, 50);
    // var_dump($conta);

    // echo PHP_EOL;
    // echo "Conta 3";
    // var_dump($conta3);
    // $conta3->depositar(-300);
    // var_dump($conta3);
    

   // echo PHP_EOL;
    //echo "conta1 " . PHP_EOL;
    /*var_dump($conta);
        #unset($contaTeste); 
        #unset, nesse caso, destrói o objeto, ao fazer isso ele chama o metodo destrutor
    */
    ContaV2::getCountConta();

   
?>