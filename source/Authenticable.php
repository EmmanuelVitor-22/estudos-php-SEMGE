<?php

namespace Bank;

interface Authenticable{
    public function canAuth($senha);

}