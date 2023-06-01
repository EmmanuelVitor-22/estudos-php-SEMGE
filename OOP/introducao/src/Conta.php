<?php
class Conta
{
    private $cpfTitular;
    private $nome;
    private $saldo = 0;
    public function __construct($cpfTitular, $nome, $saldo)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nome = $nome;
        $this->saldo = $saldo;
    }
    public function sacar($valorDeSaque){
        if ($valorDeSaque < 0 || $valorDeSaque > $this->saldo ) {
            echo "Valor invalido ou saldo insuficiente";
        } else {
            $this->saldo -= $valorDeSaque;
            var_dump($this->saldo);
        }
    }
    public function depositar(float $valorDeDeposito){
        if($valorDeDeposito<0)
            echo "Valor de deposito não pode ser negativo";
       
            return $this->saldo +=$valorDeDeposito;
        
    }

    public function tranferir(Conta $contaDestino, $valorDeTranferencia){
        if ($valorDeTranferencia>$this->saldo) {
            echo "Valor indisponivel";
        }else{
            $this->sacar($valorDeTranferencia);
            $contaDestino->depositar($valorDeTranferencia);
        }
    }
}




$conta = new Conta("040428", "Emm", 10000);
$conta->sacar(33);
$conta->depositar(30);

var_dump($conta);
$conta2 = new Conta("8777", "sdsds", 230);
$conta2->depositar(160);
var_dump($conta2);




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