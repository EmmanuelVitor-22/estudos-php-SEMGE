<?php
namespace Bank\Model;
    class Address{
        private $city;
        private $neighbourhood; #bairro
        private $street;
        private $state;

        /**
         * @param $city
         * @param $neighbourhood
         * @param $street
         * @param $state
         */
        public function __construct($city, $neighbourhood, $street, $state)
        {
            $this->city = $city;
            $this->neighbourhood = $neighbourhood;
            $this->street = $street;
            $this->state = $state;
        }




    }