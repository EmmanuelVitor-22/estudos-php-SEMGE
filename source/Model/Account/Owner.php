<?php
namespace Model;
namespace Bank\Model\Account;


use Bank\Model\Address;
use Bank\Model\Person;

class Owner extends Person { #owner = proprietario
    private Person $person; // pessoa
    private Address $address; // endereco

    function __construct(Person $person, Address $address){
        $this->person = $person;
        $this->address = $address;
    }

    public function getAddress(): Address{
        return $this->address;
    }

    public function getPerson(): Person{
        return $this->person;
    }
}
