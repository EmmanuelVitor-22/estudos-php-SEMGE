<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body style="background-color: #808080;">
    <?php 
    $nome = "Teste Jr";
    $idade = 22;
    $quantia = 100.1;
    $ativo = true;
    $hexadecimal = 0x1A; #int pois é hexadecimal(tipos numericos como binario, hexadecimal , etc)
    $potencia = 3e2; # representação de potência são todos aqueles numero com "e" no meio (= 3 *10 (2)), por assim dizer, então esse tipo é  considerado um double
    
    var_dump($potencia);

    //converter (fazer coerção) de um valor de variavel para outro
    $numeroDeStringParaFloat = (int)"25";

    ?>
    
</body>
</html>