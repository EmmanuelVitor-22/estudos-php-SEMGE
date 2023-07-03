<?php

namespace Service;

use Model\Employee\Director;

class Auth{


    public function login(Director  $director, string $senha):bool{

            if ($director->canAuth($senha)){
                if ($senha === "1234"){
                    return "Bem vindo";
                }
                return "Senha invalida";
            }

    }
    
}