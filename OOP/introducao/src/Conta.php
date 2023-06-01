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
        if ($valorDeSaque<0 || $valorDeSaque > $this->saldo) {
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
$conta2 = new Conta("8777", "sdsds", 230);
$conta3 = new Conta("ssdsd", "sdfd", 90);
$conta4 = new Conta("ssdsd", "sdfd", 91);
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