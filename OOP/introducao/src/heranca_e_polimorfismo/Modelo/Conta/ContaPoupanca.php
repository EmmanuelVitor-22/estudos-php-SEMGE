<?php 
    namespace Modelo\Conta; 
    class ContaPoupanca extends ContaV2{

         public function sacar($valorDeSaque){
            $tarifaSaque = $valorDeSaque*0.05; 
            $valorDeSaque += $tarifaSaque;
            ($valorDeSaque < 0 || $valorDeSaque > $this->saldo ) 
                ?print( "Valor invalido ou saldo insuficiente. \n")
                :$saldo -= $valorDeSaque;
         }
    }

?>