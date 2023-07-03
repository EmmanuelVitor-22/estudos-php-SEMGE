<?php
namespace Model;
class Developer extends Employee
{
    public function calculateBonus()
    {
        return $this->getSalary()*0.1;
    }
}

