<?php 
    namespace Modelo;
    use Modelo\CpfV2;

    class Pessoa{

        private CpfV2 $cpf;
        private string $nome;

        public function __construct($cpf, $nome){
            $this->cpf = $cpf;
            $this->nome =  $nome;
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

        public function getCpf(){
                return $this->cpf;
        }

        public function setCpf(CpfV2 $cpf){
                $this->cpf = $cpf;

                return $this;
        }

        public function getNome(){
                return $this->nome;
        }

        public function setNome(string $nome){
                $this->nome = $nome;

                return $this;
        }
    }

?>