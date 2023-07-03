<?php

namespace Model;

class Manager extends Employee
{

    public function calculateBonus()
    {
       return $this->getSalary();
    }
}