<?php
namespace Model;

class Person{
        private  CPF $cpf;
        private string  $name;

        public function __construct($cpf, $name){
            $this->cpf = $cpf;
            $this->nome =  $name;
            $this->validateName($name);
        }

        /*
          Metodos privados: Utilizado quando temos regras que cabem somente a classe
          e não tem a nescessidade de ser exposta ao "mundo exterior"
      */
        private function validateName($name){
            if (strlen($name)<5) {
                echo "invalid name \n Your name need have 5 letters. If he is smaller put your last name.";
                exit();
            }
            return $name;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf(CPF $cpf){
            $this->cpf = $cpf;

            return $this;
        }

        public function getName(){
            return $this->name;
        }

        public function setName(string $name){
            $this->name = $name;

            return $this;
        }
    }