<?php

namespace Employee;

class Manager extends Employee
{

    public function calculateBonus()
    {
       return $this->getSalary();
    }
    public function levelUp()
    {
        return;// TODO: Implement levelUp() method.
    }
}