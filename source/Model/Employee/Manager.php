<?php

namespace Model\Employee;

class Manager extends Employee
{

    public function calculateBonus()
    {
       return $this->getSalary();
    }


}