<?php

namespace Service;

use Bank\Model\Account\Employee\Employee;

class BonusService{
    private $totalBonus = 0;
    public function addBonus(Employee $employee){

        $this->totalBonus += $employee->calculateBonus();

    }
    public function countTotalBonus(){
        return $this->totalBonus;
    }
}