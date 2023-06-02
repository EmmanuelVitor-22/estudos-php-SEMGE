
<?php 

class Data{
    private $dia;
    private $mes;
    private $ano;


    public function __construct($dia = "", $mes ="", $ano="") {
        $this->dia = $dia;
        $this->validaMes($mes);
        $this->mes = $mes;
        $this->validaAno($mes);
        $this->ano = $ano;
    }

    private function validaMes(){
        if ($this->mes < 0 || $this->mes > 12 ) {
             print("Mês invalido");
             return ;
        }
        return $this->mes;
    }

    private function validaAno(){
        if (strlen($this->ano) == 2 || strlen($this->ano)==4 ) {
            return $this->ano;
        }
        return print("Ano invalido invalido");
    }

    public function mostrarData(){
        echo" $this->dia / $this->mes / $this->ano";
    }
}

$data =  new Data("12", 14, "22");

$data->mostrarData();

?>