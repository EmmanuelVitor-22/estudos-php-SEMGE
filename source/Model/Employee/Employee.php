<?php
namespace Model\Account\Employee;

use Model\CPF;
use Model\Person;

abstract class Employee  extends Person{ #Employee = Funcionario
    private string $position; // cargo
    private float $salary;

    public function __construct(CPF $cpf, $name, $position, $salary) {
        // inheritance (code reuse through inheritance)
        parent::__construct($cpf, $name);
        $this->position = $position;
        $this->salary = $salary;
    }

    abstract public function calculateBonus();

    public function getSalary(): float{
        return $this->salary;
    }
    public function setSalary(float $salary): void{
        $this->salary = $salary;
    }

    public function getPosition(): string {
        return $this->position;
    }

    public function setPosition(string $position): self {
        $this->position = $position;
        return $this;
    }


}