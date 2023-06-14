<?php 
    require_once "People.php";
    class User extends People{
        private $login;
        private $senha;


        public function __construct($nome, $idade, $login, $senha)
        {
            parent::__construct($nome, $idade);
            $this->login = $login;
            $this->senha = $senha;
        }

        # sobrescrevendo metodo aprensentar, para que atenda de maneira mais expecifica ao que eu quero
        public function apresentar():string
        {
           return "{$this->getNome()}, {$this->getIdade()} anos, @{$this->login}";
        }


    }

    $user = new User('ted',12,'sdsds', 14);
    echo $user->apresentar();
    print_r($user);
    

?>