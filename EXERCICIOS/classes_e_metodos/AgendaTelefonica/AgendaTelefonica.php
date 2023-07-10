<?php

namespace AgendaTelefonica;
require_once "Contato.php";
use AgendaTelefonica\Contato;
use Error;

class AgendaTelefonica{
    private Contato $contato;

    private $listaDeContato = [];


    public function __construct(){

    }

    public function addContatos($contato){
        return $this->listaDeContato[] =  $contato;
    }

    public function getContatos(){
        return $this->listaDeContato;
    }

}

