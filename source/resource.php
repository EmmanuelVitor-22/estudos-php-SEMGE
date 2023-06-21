<?php

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $src = str_replace('Bank', "src", $nomeCompletoDaClasse);
    $src = str_replace('\\', DIRECTORY_SEPARATOR, $src);
    $src .= '.php';

    if(file_exists($src)){
        require_once $src;
    }
});
