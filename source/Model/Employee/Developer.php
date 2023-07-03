<?php
<<<<<<<< HEAD:source/Employee/Developer.php
namespace Employee;
========
namespace Model\Account\Employee;
>>>>>>>> 09894aaa70b016fa5be5c940651f0eacd9e98733:source/Model/Employee/Developer.php

class Developer extends Employee
{
    public function calculateBonus()
    {
        return $this->getSalary()*0.1;
    }

    public function levelUp(){
        $this->increaseSalary($this->getSalary()*0.75);
    }

}

