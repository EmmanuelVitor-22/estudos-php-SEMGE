<?php 
    $pessoas =[
       [
            "nome" => "João",
            "idade" => 25,
            "cidade" => "São Paulo",
            "sexo" => "Masculino"
       ],
       [
            "nome" => "Maria",
            "idade" => 30,
            "cidade" => "Rio de Janeiro",
            "sexo" => "Feminino"
       ],
       [
            "nome" => "Pedro",
            "idade" => 40,
            "cidade" => "Belo Horizonte",
            "sexo" => "Masculino"
       ],
       [
            "nome" => "Ana",
            "idade" => 22,
            "cidade" => "Salvador",
            "sexo" => "Feminino"
       ],
       [
            "nome" => "Lucas",
            "idade" => 28,
            "cidade" => "Santos",
            "sexo" => "Masculino"
       ],
       [
            "nome" => "Carla",
            "idade" => 35,
            "cidade" => "Fortaleza",
            "sexo" => "Feminino"
       ],
       [
            "nome" => "Gustavo",
            "idade" => 33,
            "cidade" => "Recife",
            "sexo" => "Masculino"
       ],
       [
            "nome" => "Juliana",
            "idade" => 29,
            "cidade" => "Porto Alegre",
            "sexo" => "Feminino"
       ],
       [
            "nome" => "Ricardo",
            "idade" => 27,
            "cidade" => "Manaus",
            "sexo" => "Masculino"
       ],
       [
            "nome" => "Fernanda",
            "idade" => 31,
            "cidade" => "Belém",
            "sexo" => "Feminino"
       ]
    ];

    function headerList($titulo, $col1="Nome", $col2=""){
        
        echo "\t     $titulo" .PHP_EOL;
        echo "  $col1 \t\t $col2" .PHP_EOL;

    }

    headerList("Lista", "Nome", "Idade");
    foreach ($pessoas as $pessoa) {
      echo "-----------------------------";
      echo PHP_EOL;
      echo "| Nome: $pessoa[nome] | idade :$pessoa[idade] |" . PHP_EOL;
    }

    echo PHP_EOL . PHP_EOL;
    headerList("Moradores de  Santos ", "Nome");

    echo "  Moradores de  Santos " .PHP_EOL;
    echo "       Nome " .PHP_EOL;
    foreach ($pessoas as $pessoa) {
        if($pessoa["cidade"] == "Santos"){
            echo "-----------------";
            echo PHP_EOL;
            echo "| Nome: $pessoa[nome] \t|" . PHP_EOL;
            echo "-----------------";
        }
    }
    echo PHP_EOL . PHP_EOL;
    echo "  Maiores de idade " .PHP_EOL;
    echo "       Nome " .PHP_EOL;
    foreach ($pessoas as $pessoa) {
        if($pessoa["idade"] >=18){
            echo "-----------------";
            echo PHP_EOL;
            echo "| Nome: $pessoa[nome]  |" . PHP_EOL;
           
        }
    }
    echo PHP_EOL . PHP_EOL;

    echo "  Pessoas do sexo M " .PHP_EOL;
    echo "       Nome " .PHP_EOL;
    $sexoM = 0;
    foreach ($pessoas as $pessoa) {
        if($pessoa["sexo"] == "Masculino"){
           $sexoM ++;
        }
    }
    echo "-----------------";
    echo PHP_EOL;
    echo "| qtd sexo M = $sexoM  |" . PHP_EOL;
    echo PHP_EOL . PHP_EOL;
?>