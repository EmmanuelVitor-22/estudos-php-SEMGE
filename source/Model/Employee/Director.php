<?php

namespace Model\Employee;

class Director extends Employee
{

    public function calculateBonus()
    {
        return $this->getSalary()*2;
    }
}