<?php

    $alunos =[
        ["nome" => "João", "nota" => 8.5],
        ["nome" => "Maria", "nota" => 7.2],
        ["nome" => "Pedro", "nota" => 9.0],
        ["nome" => "Ana", "nota" => 6.8],
        ["nome" => "Carlos", "nota" => 5.5],
        ["nome" => "Mariana", "nota" => 9.5],
        ["nome" => "Lucas", "nota" => 7.9],
        ["nome" => "Julia", "nota" => 8.7],
        ["nome" => "Fernanda", "nota" => 6.3],
        ["nome" => "Rafael", "nota" => 7.5]
    ];
    $totalAlunos = count($alunos);
    $totalNotas = 0;
    foreach ($alunos as $key => $aluno) {
        $totalNotas +=($aluno["nota"]);
        $media = $totalNotas/$totalAlunos;
    }
    echo "A média da turma é: $media" . PHP_EOL;

    $notaMaior = 0;

    foreach ($alunos as $key => $aluno) {
        if ($aluno["nota"] > $notaMaior) {
            $notaMaior = $aluno["nota"];
            $aluno["nome"];
            print($aluno["nome"] . PHP_EOL);
        }
    }
    print(" A maior norta foi: $notaMaior e o aluno foi". PHP_EOL);
    

?>

