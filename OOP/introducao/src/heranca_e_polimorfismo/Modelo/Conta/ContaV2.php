<?php



    
    namespace Estudo\OOP\Modelo\Conta;
    use NumberFormatter;
    use Modelo\Conta\TitularV2;

    abstract class ContaV2{
        //modificadores de acesso (private, protected, public)
        private TitularV2 $titular;
        private  float $saldo = 0;
        # Atributo estático, é um atributo da classe(forma) e não do objeto(bolo) em si
        private static $countConta = 0;

        /*metodo construtor
        DETALHE: EM PHP SÓ PODE TER APENAS UM CONSTRUTOR 
        */
        public function __construct($titular){
            
            $this->titular = $titular;
            $this->saldo = 0;
        }
        /*
            tem como função encerrar/destruir algo (nesse caso um obj);
            é chamado automaticamente qunado a vida do objeto chega ao fim
        */
        public function __destruct(){
            echo "Objeto destruido;" . PHP_EOL;
        }

        //metodos
        
        public function sacar($valorDeSaque){
            $tarifaSaque = $valorDeSaque*$this->porcentagemDaTarifa(); 
            $valorDeSaque += $tarifaSaque;
            ($valorDeSaque < 0 || $valorDeSaque > $this->saldo ) 
                ?print( "Valor invalido ou saldo insuficiente. \n")
                :$this->saldo -= $valorDeSaque;
        }

        abstract public function porcentagemDaTarifa():float;

        public function depositar(float $valorDeDeposito){
            ($valorDeDeposito<0) ? print( "Valor de deposito não pode ser negativo. \n")
                                : $this->saldo +=$valorDeDeposito;
        }

        public function tranferir(ContaV2 $contaDestino, $valorDeTranferencia){
        ($valorDeTranferencia>$this->saldo) 
        ? print( "Valor indisponivel. \n")
        : $this->sacar($valorDeTranferencia);
            $contaDestino->depositar($valorDeTranferencia); 
        }

        /*
            No caso do saldo, como a unica forma de alterá-lo ou defini-lo
            será através dos metodos saque, transferencia ou deposito.
            Metodos de acesso não precisam, obrigatóriamente, serem criados para todos
            os atributos
        */ 
        public function getSaldo(){
            return $this->formataSaldo($this->saldo);
        }

        private function formataSaldo($saldo){
            $formato = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
             return numfmt_format_currency($formato, $saldo,'BRL');
        }
        
        //metodos estaticos
        public static function getCountConta(){
            /* 
                para acessa um atributo estático se usa ::
                o self é equivalente ao "this"
                enquanto o this é usado para membros da instancia o self é usado para mebros estáticos
            */   
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