<?php

namespace Model\Employee;

use Model\Authenticable;


class Manager extends Employee implements Authenticable
{

    public function calculateBonus()
    {
       return $this->getSalary();
    }


    public function canAuth($password)
    {
        return $password ==="4321";
    }
}