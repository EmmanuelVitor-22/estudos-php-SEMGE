<?php 

    //input - usuario vai dizer o valor em alguma unidade de medida
    // output - esse valor nas demais unidades de medida
    $unidadesBase = [
        "mm" =>1,
        "cm" => 10,
        "m" => 1000,
        "km" => 1000000
    ];
    
        $unidadesValidas = implode(', ', array_keys($unidadesBase));
        do{
            $unidade = readline("Digite o valor dessa unidade ($unidadesValidas)");

            if (!isset($unidadesBase[$unidade])) {
                echo "Invalido \n\n";
            }
        }while(!isset($unidadesBase[$unidade]));

      do{
            $valor = readline("Digite o valor.");

            if (!is_numeric($valor)) {
                echo "Invalido \n\n";
            } 
      }while(!isset($valor));

      $calcEmMM = $valor * $unidadesBase[$unidade];
      foreach ($unidadesBase as $unidade => $valorUnidade) {
        echo ($calcEmMM/$valorUnidade) . " " . $unidade ;
          }

?>