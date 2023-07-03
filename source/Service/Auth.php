<?php

namespace Service;

use Model\Authenticable;

class Auth{


    public function login(Authenticable $authenticable, string $password){
        if ($authenticable->canAuth($password)){
            return "Bem vindo(a)";
        }
        return  "Senha ou usuario incorreto";
    }
    
}