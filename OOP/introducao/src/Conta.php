<?php
class Conta
{
    private $cpfTitular;
    private $nome;
    private $saldo;
    public function __construct($cpfTitular, $nome, $saldo)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nome = $nome;
        $this->saldo = $saldo;
    }
    public function sacar($valorDeSaque)
    {
        var_dump($valorDeSaque > $this->saldo, $valorDeSaque, $this->saldo);
        if ($valorDeSaque > $this->saldo) {
            var_dump("debug no saldo", $this->saldo);
            echo "<br>";
            var_dump("debug no valor de saque", $valorDeSaque);
            exit();
            echo "Valor invalido ou saldo insuficiente";
        } else {
            $this->saldo -= $valorDeSaque;
            var_dump($this->saldo);
        }
    }
}
$conta = new Conta("040428", "Emm", 10000);
$conta->sacar(33);
var_dump($conta);
/* 
 * $primeiraConta = new Conta("ffdfdf", "Nome ", 1234);
 * * $primeiraConta = armazena o endereço para onde o objeto está armazenado em memoria e não o objeto em si;
 * 
 * * Ou seja é por referencia. * *//* * $segundaConta = $primeiraConta; 
 * $segundaConta = recebe o valor do endereço que "$primeiraConta" armazena. No fim das contas aponta para o mesmo endereço de memoria; 
 * *
 *  */
// Explicação em imagem - https://i.stack.imgur.com/drQLh.jpg ;
?>