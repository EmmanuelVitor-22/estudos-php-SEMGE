<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  style="background-color: #D0D0D0;" >

    <h1>Working with Strings </h1>
    <div>
        <h2>Tipos de concatenações</h2>
        <p>
            <?php 
            #Interpolação Simples
                $name = "Laila";
                $age = 32;
                $city = "Rio de Janeiro";
                $UF = "RJ";
                echo "My name is $name  I'm $age years and I leave in $city / $UF";
         ?>
        </p>
        <?php
            #Concatenação usando constantes
            #Por não possuirem o sinal de " $" não podem ser interpoladas diretamente sentro das aspas
            #Só podem ser interpoladas usando " . "
            const NAME = "Paulo";
            echo "My name is " . NAME;
        ?>
        
        <p>
        <?php 
            #interpolação combinandos os dois tipos
            const NAME = "Paulo";
            echo "My name is " . NAME;
                $age = 19;
                $city = "São Paulo";
                $UF = "SP";
                echo "\n";
                echo "My name is ".NAME. ", I'm $age years and I leave in $city / $UF";
        ?>
        </p>
    </div>



    <div>
        <h2> Diferença entre aspas duplas("") e Simples ('')</h2>
        <p>
            * Aspas duplas interpretam o conteudo que existem dentro dela (são processadas);<br>
              Suportam mais caracteres de escape, tais como \\n, \\r, \\t e outros.        
        <p>
        <p>
            *aspas simples são mais literais e mostram exatamente o que é escrito dentro dela ( não processadas)
        </p>
            <?php 
            #Interpolação Simples
                $name = "Laila";
                $age = 32;
                $city = "Rio de Janeiro";
                $UF = "RJ";
                echo 'My name is $name  I\'m $age years and I leave in $city / $UF';
         ?>
        </p>
    </div>
</body>
</html>