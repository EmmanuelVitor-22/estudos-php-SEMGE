<?php 
   require_once "CpfV2.php";
    class TitularV2{
        private Pessoa $pessoa;
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
    }

?>