<?php

namespace banco;
use NumberFormatter;

class ContaCorrente{
private $numeroConta;
private $saldo;
private $especial;
private $limiteUsado;
private $limite;


    public function __construct($numeroConta, $especial, $limite=0)
    {
        $this->numeroConta = $numeroConta;
        $this->saldo = 0;
        $this->especial = $especial;
        $this->limiteUsado = 0;
        $this->limite = $limite;
    }

    public function saque($valorDeSaque){
        $saqueComun = $this->sacar($valorDeSaque);
        if ($saqueComun !== $this->saldo){
            return $saqueComun;
        }
        return $this->sacarEspecial($valorDeSaque);

    }
    public function sacar($valorDeSaque){
        if ((($valorDeSaque>$this->saldo) || ($valorDeSaque<0)) && !$this->especial ){
            return "Voce não tem saldo para isso, ou seu valor digitado foi negativo";
        }
        return $this->saldo -= $valorDeSaque;
    }

    public function teste($valorDeSaque){
        if ($this->especial && ($valorDeSaque>0 && $valorDeSaque<= $this->saldo)){
            return  $this->saldo -= $valorDeSaque;
        }

        if ($this->especial && ($valorDeSaque>0 && $valorDeSaque > $this->saldo)){
            $this->limiteUsado = $this->saldo - $valorDeSaque;
            if ($this->limite>0 && $this->limite>=$valorDeSaque){

                $this->limiteUsado +=  $valorDeSaque;

            }
        }

    }
    public function sacarEspecial($valorDeSaque)
    {
        if($this->especial && $valorDeSaque<=$this->limite){
            $this->limiteUsado +=  $valorDeSaque;
            $this->limite -= $this->limiteUsado;
            return $this->saldo -= $this->limite;
        }
        return "o limite escede o seu cheque especial";

    }
//    public function isContaEspecial(){
//        if(!$this->especial){
//            return  "Usuario não possui uma conta com limite especial"
//        }
//
//
//    }
    public function depositar($valorDeDeposito){
        if ($valorDeDeposito<0){
            return "Você não pode fazer um saque negativo, digite um valor positivo e valido";
        }
        return $this->saldo += $valorDeDeposito;
    }
    public function __toString(){
        return "{$this->numeroConta}, {$this->saldo}, {$this->especial}, {$this->limite}";
    }

    private function formatarValor($valor) {
        $formato = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        return numfmt_format_currency($formato, $valor, 'BRL');
    }

    public function getNumeroConta()
    {
        return $this->numeroConta;
    }
    public function setNumeroConta($numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }

    public function getSaldo()
    {
        return $this->formatarValor($this->saldo);
    }
    public function getEspecial()
    {
        return $this->especial;
    }
    public function setStatus($especial): void
    {
        $this->especial = $especial;
    }
    public function getLimite()
    {
        return $this->limite;
    }
    public function setLimite($limite): void
    {
        $this->limite = $limite;
    }
}

