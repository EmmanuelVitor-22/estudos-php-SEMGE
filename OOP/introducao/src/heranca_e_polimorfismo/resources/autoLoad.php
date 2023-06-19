<?php

    spl_autoload_register(function (string $nomeCompletoDaClasse){
    echo $nomeCompletoDaClasse;
    exit();
    });