<?php

namespace AgendaTelefonica;



class Contato{
    private static int $count = 1;
    private int $id;
    private string $nome;
    private string $telefone;

    public function __construct( string $nome, string $telefone)
    {
        $this->id = self::$count++;
        $this->nome = $nome;
        $this->telefone = $telefone;
    }


    public static function getCount(): int
    {
        return self::$count;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

}



