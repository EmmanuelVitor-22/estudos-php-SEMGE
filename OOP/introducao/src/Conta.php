<?php
class Conta{
    //modificadores de acesso (private, protected, public)
    private $cpfTitular;
    private $nome;
    private $saldo = 0;

    //metodo construtor
    //DETALHE: EM PHP SÓ PODE TER APENAS UM CONSTRUTOR
    public function __construct($cpfTitular, $nome){
        $this->cpfTitular = $cpfTitular;
        $this->validaNome($nome);
        $this->nome=$nome;
        $this->saldo = 0;
    }

    //metodos
    public function sacar($valorDeSaque){
         ($valorDeSaque < 0 || $valorDeSaque > $this->saldo ) 
            ?print( "Valor invalido ou saldo insuficiente. \n")
            :$this->saldo -= $valorDeSaque;
    }

    public function depositar(float $valorDeDeposito){
        ($valorDeDeposito<0) ? print( "Valor de deposito não pode ser negativo. \n")
                             : $this->saldo +=$valorDeDeposito;
    }

    public function tranferir(Conta $contaDestino, $valorDeTranferencia){
      ($valorDeTranferencia>$this->saldo) 
      ? print( "Valor indisponivel. \n")
      : $this->sacar($valorDeTranferencia);
        $contaDestino->depositar($valorDeTranferencia); 
    }

    /* Metodos privados: Utilizado quando temos regras que cabem somente a classe
       e não tem a nescessidade de ser exposta ao "mundo exterior" */

    private function validaNome($nome){
        if (strlen($nome)<5) {
            echo "Nome invalido. \n Se nome é menor que 5 letras ponha seu sobrenome.";
            exit();
        }
        return $nome;
    }
    /*
        Metodos GET - Devolvem o valor (retornam) de um atributo
        Metodos Set - definem um valor de um atributo.
                    - Podem conter uma validação (ou comportamento).  
    */
    public function getCpfTitular(){
        return $this->cpfTitular;
    }
    public function setCpfTitular($cpfTitular){
        $this->cpfTitular = $cpfTitular;

        return $this;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;

        return $this;
    }

    /*
        No caso do saldo, como a unica forma de alterá-lo ou defini-lo
        será através dos metodos saque, transferencia ou deposito.
        Metodos de acesso não precisam, obrigatóriamente, serem criados para todos
        os atributos
    */ 
    public function getSaldo(){
        return $this->saldo;
    }

     
}



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