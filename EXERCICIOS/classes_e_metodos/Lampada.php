<?php

class Lampada{

    private  $isAcesa;

    public function __construct($isAcesa = false){
        $this->isAcesa = $isAcesa;

    }

    public function ligarLampada(){
        if (!$this->isAcesa){
            $this->setIsAcesa(true);
            return "Lampada foi acesa.";
        }
        return "Lampada já está acesa";
    }
    public function desligarLampada(){
        if ($this->isAcesa === true){
            $this->setIsAcesa(false);
            return "Lampada foi apagada.";
        }
        return "Lampada já está apagada";
    }
    public function getIsAcesa(): bool
    {
        return $this->isAcesa;
    }

    public function setIsAcesa(bool $isAcesa): void
    {
        $this->isAcesa = $isAcesa;
    }

}

$lampada =  new Lampada();

print_r( $lampada->desligarLampada());
echo PHP_EOL;
var_dump( $lampada->getIsAcesa());
echo PHP_EOL;
print_r($lampada->desligarLampada());
echo PHP_EOL ;
print_r($lampada->ligarLampada());
echo PHP_EOL;
var_dump( $lampada->getIsAcesa());
echo PHP_EOL;
var_dump( $lampada);
