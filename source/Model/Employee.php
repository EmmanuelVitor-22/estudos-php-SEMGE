<?php
namespace Model;

class Employee  extends Person{ #Employee = Funcionario
    private string $position; // cargo

    public function __construct($cpf, $name, $position) {
        // inheritance (code reuse through inheritance)
        parent::__construct($cpf, $name);
        $this->position = $position;
    }

    public function getPosition(): string {
        return $this->position;
    }

    public function setPosition(string $position): self {
        $this->position = $position;
        return $this;
    }


}