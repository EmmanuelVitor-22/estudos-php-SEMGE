<?php

namespace Model\Account\Employee;

class Manager extends Employee
{

    public function calculateBonus()
    {
       return $this->getSalary();
    }
}