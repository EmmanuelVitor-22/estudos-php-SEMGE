<?php
class Conta{
    //modificadores de acesso (private, protected, public)
    private $cpfTitular;
    private $nome;
    private $saldo = 0;
    # Atributo estático, é um atributo da classe(forma) e não do objeto(bolo) em si
    private static $countConta = 0;

    //metodo construtor
    //DETALHE: EM PHP SÓ PODE TER APENAS UM CONSTRUTOR
    public function __construct($cpfTitular, $nome){
        echo "constroi";
        $this->cpfTitular = $cpfTitular;
        $this->validaNome($nome);
        $this->nome=$nome;
        $this->saldo = 0;
    }
    //tem como função encerrar/destruir algo (nesse caso um obj);
    //é chamado automaticamente qunado a vida do objeto chega ao fim
    public function __destruct(){
        echo "Objeto destruido;" . PHP_EOL;
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
        No caso do saldo, como a unica forma de alterá-lo ou defini-lo
        será através dos metodos saque, transferencia ou deposito.
        Metodos de acesso não precisam, obrigatóriamente, serem criados para todos
        os atributos
    */ 
    public function getSaldo(){
        return $this->saldo;
    }

    //metodo statico
    public static function getCountConta(){
        // para acessa um atributo estático se usa ::
        // o self é equivalente ao "this"
        // enquanto o this é usado para membros da instancia o self é usado para mebros estáticos
        return self::$countConta++;
        // o codigo acima equivale a: return Conta::$countConta
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