<?php

namespace Model\Account;


use Model\Authenticable;
use Model\Address;
use Model\Person;

class Owner extends Person implements Authenticable { #owner = proprietario
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
    public function canAuth($password)
    {
       return $password === "user";
    }
}
