<?php
namespace Bank\Model;
    class CPF{
        private string  $numberCpf;

        public function __construct(string $numberCpf){
            $this->$numberCpf = $numberCpf;
            $this->validateCpf($numberCpf);
        }

        public function validateCpf($numberCpf){
            $numberCpf = filter_var($numberCpf, FILTER_VALIDATE_REGEXP,[
                'options' =>[
                    'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
                ]
            ]);
            if($numberCpf === false){
                echo  "INVALID CPF";
                exit();
            }
            return $numberCpf;
        }
        public function getNumCpf(){
            return $this->numberCpf;
        }

        public function setNumCpf($numberCpf){
            $this->numberCpf = $numberCpf;

            return $this;
        }
    }