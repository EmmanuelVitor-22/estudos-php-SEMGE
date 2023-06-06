<?php 
   
    class Titular{
        private Cpf $cpf;
        private $nome;

        function __construct(Cpf $cpf,$nome){
            $this->cpf = $cpf;
            $this->nome = $nome;  
            $this->validaNome($nome);
        }

        /* 
            Metodos privados: Utilizado quando temos regras que cabem somente a classe
            e não tem a nescessidade de ser exposta ao "mundo exterior"
        */
        private function validaNome($nome){
            if (strlen($nome)<5) {
                echo "Nome invalido. \n Se nome é menor que 5 letras ponha seu sobrenome.";
                exit();
            }
            return $nome;
        }

        /*
            Metodos GET - Devolvem o valor (retornam) de um atributo
            Metodos Set - definem um valor de um atributo.
                        - Podem conter uma validação (ou comportamento).  
        */
        public function getCpf(){
            return $this->cpf->getNumCpf();
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