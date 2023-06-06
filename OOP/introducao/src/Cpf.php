<?php 

    class Cpf{

        private string $numCpf;

        public function __construct(string $numCpf){
            $this->numCpf = $numCpf;
        }

        public function getNumCpf(){
            return $this->numCpf;
        }

        public function setNumCpf($numCpf){
            $this->numCpf = $numCpf;

            return $this;
        }

    }

?>