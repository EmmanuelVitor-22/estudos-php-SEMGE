<?php
namespace Model\Account\Employee;

class Developer extends Employee
{
    public function calculateBonus()
    {
        return $this->getSalary()*0.1;
    }
}

