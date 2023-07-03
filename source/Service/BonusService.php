<?php

namespace Service;

<<<<<<< HEAD
use Employee\Employee;
=======
use Bank\Model\Account\Employee\Employee;
>>>>>>> 09894aaa70b016fa5be5c940651f0eacd9e98733

class BonusService{
    private $totalBonus = 0;
    public function addBonus(Employee $employee){

        $this->totalBonus += $employee->calculateBonus();

    }
    public function countTotalBonus(){
        return $this->totalBonus;
    }
}