<?php 

function exibirMensagem($msg){
    echo $msg . PHP_EOL;
}

#função de calcular saldo
function sacar(array $conta, float $valorDeSaque):array{
    if ($valorDeSaque > $conta["saldo"] ) {
        exibirMensagem("Não pode sacar");
     }
     else{
        $conta["saldo"] -=$valorDeSaque;
    }
        return $conta;
}

function depositar( array $conta, float $valorDeDeposito):array{
    if ($valorDeDeposito > 0 ) {
        $conta["saldo"] +=$valorDeDeposito;
    }
    else{
        exibirMensagem("Não pode depositar nada ou valor negativo.");
    }
        return $conta;

}
?>