<?php 
    namespace Estudo\OOP\Modelo\Conta;
    use Estudo\OOP\Modelo\Endereco;
    use Estudo\OOP\Modelo\Pessoa;

    class TitularV2 extends Pessoa{
        private Pessoa $pessoa; //herança por composição 
        private Endereco $endereco ;

        function __construct(Pessoa $pessoa, Endereco $endereco){
            $this->pessoa = $pessoa;
            $this->endereco = $endereco;  
           
        }

        /*
            Metodos GET - Devolvem o valor (retornam) de um atributo
            Metodos Set - definem um valor de um atributo.
                        - Podem conter uma validação (ou comportamento).  
        */
     
        public function getEndereco():Endereco{
            return $this->endereco;       
      }
      public function getPessoa():Pessoa{
        return $this->pessoa;       
  }
    }

?>