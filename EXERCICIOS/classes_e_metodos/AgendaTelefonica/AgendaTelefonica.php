<?php

namespace AgendaTelefonica;
require_once "Contato.php";
use AgendaTelefonica\Contato;



class AgendaTelefonica{
    private Contato $contato;
    private $contatos = [];
    public function __construct(Contato $contato )
    {
        $this->contato = $this->addContatos($this->contatos, $contato);
    }


    public function getContato(): Contato
    {
        return $this->contato;
    }

    public function setContato(Contato $contato): void
    {
        $this->contato = $contato;
    }


    public function getContatos(): array
    {
        return $this->contatos;
    }


    public function addContatos(array $contatos, Contato $contato): void
    {
        $this->contatos = array_push($contatos, $contato);
    }

}
$nova = new AgendaTelefonica(addContatos(new Contato("Eva","43242")));

print_r($nova);
