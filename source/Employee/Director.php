<?php

namespace Employee;

class Director extends Employee{
    public function calculateBonus()
    {
       return $this->getSalary()*2;
    }

    public function isAuth($password):bool{
        return $password==="321123";
    }

    public function levelUp()
    {
        return;// TODO: Implement levelUp() method.
    }
}