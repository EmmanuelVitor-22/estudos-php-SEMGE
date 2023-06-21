<?php



    namespace  Bank\Model;
    require_once "resource.php";
    use Model\Account\{Account, CheckingAccount, Owner, SavingsAccount};
    use Model\{Address, CPF, Person};


    #INSTANCIAS
    $maria = new Person (new CPF("071.956.755-91"), "Maria Solza");
    $maria = new Person( new CPF("071.956.755-91"), "Maria Solza");
    $joao = new Person (new CPF("078.996.855-96"), "Joao Nunes");
    $jose = new Person (new CPF("192.777.185-18"), "José Pires");

    $endereco = new Address('Salvador', "Babalho", "Rua NSL", "22A");
    $endereco2 = new Address('Salvador', "Babalho", "Rua NSL", "12");

    $titularMaria = new Owner($maria,$endereco);
    $titularJoao = new Owner($joao,$endereco);
    $titularJose = new Owner($jose, $endereco2);

    $contaMaria= new SavingsAccount($titularMaria);
    $contaJoao = new CheckingAccount($titularJoao);
    $contaJose =  new SavingsAccount($titularJose);

    #MANIPULACOES EM CONTAS
    $contaJose->deposit(30000);
    $contaJose->transfer($contaMaria, 10000);
    $contaJose->transfer($contaJoao, 10000);
    $contaJoao->deposit(100);

    echo "Conta de: saldo";
    echo PHP_EOL;
    echo $contaMaria->getBalance();
    echo PHP_EOL;

    # CONTAS
    echo "Conta de: Maria";
    echo PHP_EOL;

    echo PHP_EOL;
    echo "Conta de: José";
    echo PHP_EOL;
    var_dump($contaJose);
    var_dump($contaJose);
    echo PHP_EOL;

    # SALDOS
    echo "Saldo de: Maria";
    echo PHP_EOL;
    echo $contaMaria->getBalance();
    echo PHP_EOL;
    echo "Saldo de: Joao";
    echo PHP_EOL;
    echo $contaJoao->getBalance();
    echo PHP_EOL;
    echo "Saldo de: José";
    echo PHP_EOL;
    echo $contaJose->getBalance();
    echo PHP_EOL;

    /*var_dump($conta);
        #unset($conta);
        #unset, nesse caso, destrói o objeto, ao fazer isso ele chama o metodo destrutor
    */
    echo PHP_EOL;
    #metodo estático para saber quantas instancias foram feitas a partir da classe CONTAV2
    Account::getCountAccount();


