<?php

    namespace Estudo\OOP\Modelo;
    class CpfV2{

        private string $numCpf;

        public function __construct(string $numCpf){
            $this->numCpf = $numCpf;
            $this->validarCpf($numCpf);
        }

        public function validarCpf($numCpf){
           $numCpf = filter_var($numCpf, FILTER_VALIDATE_REGEXP,[
            'options' =>[
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
            ]);
            if($numCpf === false){
                echo  "CPF INVÁLIDO";
                exit();
            }   
            return $numCpf;
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