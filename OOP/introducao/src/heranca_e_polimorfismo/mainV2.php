<?php 

    require_once "resources/resources.php";

    #INSTANCIAS
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

    #MANIPULACOES EM CONTAS
    $contaJose->depositar(30000);
    $contaJose->tranferir($contaMaria, 10000);
    $contaJose->tranferir($contaJoao, 10000);

    # CONTAS
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

    # SALDOS
    echo "Saldo de: Maria";
    echo PHP_EOL;
    echo $contaMaria->getSaldo();
    echo PHP_EOL;
    echo "Saldo de: Joao";
    echo PHP_EOL;
    echo $contaJoao->getSaldo();
    echo PHP_EOL;
    echo "Saldo de: José";
    echo PHP_EOL;
    echo $contaJose->getSaldo();
    echo PHP_EOL;
   

    /*var_dump($conta);
        #unset($conta); 
        #unset, nesse caso, destrói o objeto, ao fazer isso ele chama o metodo destrutor
    */

    echo PHP_EOL;
    #metodo estático para saber quantas instancias foram feitas a partir da classe CONTAV2
    ContaV2::getCountConta();

   
?>