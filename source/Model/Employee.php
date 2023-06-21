<?php
namespace Model;

class Employee  extends Person{ #Employee = Funcionario
    private string $position; // cargo
    private float $salary;

    public function __construct($cpf, $name, $position, $salary) {
        // inheritance (code reuse through inheritance)
        parent::__construct($cpf, $name);
        $this->position = $position;
        $this->salary = $salary;
    }

    public function calculateBonus(){
        return $this->salary * 0.1;

    }

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