<?php

namespace Model\Employee;

use Bank\Authenticable;

class Director extends Employee implements Authenticable
{
        private $senha;

    public function calculateBonus()
    {
        return $this->getSalary()*2;
    }


    public function canAuth($senha){
       return $senha === "1234";
    }
}