<?php
//    require_once "Modelo/Conta/ContaV2.php";
//    require_once "Modelo/Pessoa.php";
//    require_once "Modelo/Endereco.php";
//    require_once "Modelo/Conta/TitularV2.php";
//    require_once "Modelo/CpfV2.php";

// essa função faz exatamente o que esta sendo comentado acima. de um amaneira mais elegante
spl_autoload_register(function (string $nomeCompletoDaClasse){
    $srcCompleto = str_replace('Estudo\\OO',"src", $nomeCompletoDaClasse);
    $src = str_replace('\\', DIRECTORY_SEPARATOR,$srcCompleto);
    $src .= '.php';

    if(file_exists($srcCompleto)){
        require_once $srcCompleto;
    }
    echo $src;

});



?>