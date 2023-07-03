<?php

namespace Model\Employee;

class Director extends Employee
{
        private $senha;

    /**
     * @param $senha
     */
    public function __construct($senha)
    {
        $this->senha = $senha;
    }

    public function calculateBonus()
    {
        return $this->getSalary()*2;
    }

    public function canAuth(){ //pode autenticar
        if ($this->senha === "1234"){
            return "Bem vindo";
        }
        return "Senha invalida";
    }


    public function getSenha()
    {
        return $this->senha;
    }



}