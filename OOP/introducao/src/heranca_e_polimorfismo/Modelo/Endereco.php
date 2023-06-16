<?php 
        namespace Modelo;
    class Endereco{
        private $cidade;
        private $bairro;
        private $rua;
        private $numero;

        function __construct($cidade, $bairro, $rua, $numero){
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->rua  = $rua;
            $this->numero = $numero;
        }

         public function getCidade()
        {
                return $this->cidade;
        }

       
        public function setCidade($cidade): self
        {
                $this->cidade = $cidade;

                return $this;
        }

         public function getBairro()
        {
                return $this->bairro;
        }

       
        public function setBairro($bairro): self
        {
                $this->bairro = $bairro;

                return $this;
        }

         public function getRua()
        {
                return $this->rua;
        }

       
        public function setRua($rua): self
        {
                $this->rua = $rua;

                return $this;
        }

         public function getNumero()
        {
                return $this->numero;
        }

       
        public function setNumero($numero): self
        {
                $this->numero = $numero;

                return $this;
        }
    }

?>