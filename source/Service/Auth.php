<?php

namespace Service;

use Bank\Authenticable;
use Model\Employee\Director;

class Auth{


    public function login(Authenticable $authenticable, string $senha){


                if ($senha == "1234"){
                    echo "Bem vindo";
                }
                echo "Senha invalida";


    }
    
}