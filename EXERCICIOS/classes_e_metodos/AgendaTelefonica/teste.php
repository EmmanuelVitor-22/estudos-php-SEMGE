<?php

namespace AgendaTelefonica;
require_once "Contato.php";
require_once "AgendaTelefonica.php";
use AgendaTelefonica\{AgendaTelefonica,Contato};


    $agenda2 = new AgendaTelefonica();
    $agenda2->addContatos(new Contato("12121","23232"));


    $agenda = new AgendaTelefonica();
    $contato = new Contato();
    $contato->setNome("Alow");
    $contato->setTelefone("202302");
    $agenda->addContatos($contato);

    $contato2 = new Contato();
    $contato2->setNome("a");
    $contato2->setTelefone("aaaaa");
    $agenda->addContatos($contato2);


try {
       print_r($agenda->getContatos());
    }catch (\Error $e){
        echo "não foi encontrado nenhum contato";
}



