<?php 
    namespace Modelo;
    class Funcionario extends Pessoa{
        private string $cargo;

        public function __construct($cpf,$nome, $cargo){
            //herança (reutilização de codigo por herança)
           parent::__construct($cpf,$nome);
           $this->cargo = $cargo;
        }
    
        public function getCargo(): string
        {
                return $this->cargo;
        }

        public function setCargo(string $cargo): self
        {
                $this->cargo = $cargo;
                return $this;
        }
    }

?>