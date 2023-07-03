<?php

namespace Model\Employee;

use Model\Authenticable;


class Director extends Employee implements Authenticable
{


    public function calculateBonus()
    {
        return $this->getSalary()*2;
    }

    public function canAuth($password){
       return $password === "1234";
    }
}