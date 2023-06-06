<?php 

    class Titular{
        private $cpf;
        private $nome;

        function __construct($cpf,$nome){
            $this->cpf = $cpf;
            $this->nome = $nome;  
        }

        /*
        Metodos GET - Devolvem o valor (retornam) de um atributo
        Metodos Set - definem um valor de um atributo.
                    - Podem conter uma validação (ou comportamento).  
        */
        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
            return $this;
        }  

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
            return $this;
        }
    }

?>