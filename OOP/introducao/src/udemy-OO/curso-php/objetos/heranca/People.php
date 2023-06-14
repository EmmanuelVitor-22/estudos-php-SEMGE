<?php 

    class People{

        private $nome;
        private $idade;

        public function __construct($nome, $idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function apresentar():string
        {
           return "{$this->nome}, {$this->idade} anos";
        }
        
        public function getNome()
        {
                return $this->nome;
        }

       
        public function setNome($nome): self
        {
                $this->nome = $nome;

                return $this;
        }

      
        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade($idade): self
        {
                $this->idade = $idade;

                return $this;
        }
    }


?>