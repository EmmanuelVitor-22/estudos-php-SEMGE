<?php
namespace Employee;
namespace Model\Account\Employee;

class Developer extends Employee
{
    public function calculateBonus()
    {
        return $this->getSalary() * 0.1;
    }

    public function levelUp()
    {
        $this->increaseSalary($this->getSalary() * 0.75);
    }

}