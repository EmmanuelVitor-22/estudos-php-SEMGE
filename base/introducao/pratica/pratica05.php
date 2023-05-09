<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <title>Pratica</title>
</head>

<body>
    <h1>Pratica 05</h1>

    <main>
        <h2>ANALIZAR NUMERO FRACIONADO</h2>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="numero">Digite um numero qualquer: </label>
            <input type="number" name="number" id="id_number" step="0.01">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <?php
    $numDigitado = $_POST['number'];
    #aqui formatar o numero para separar o milhar da parte com virgula
    echo "<p> O numero ".number_format($numDigitado, 2,",",".")."";
    $parteInteira = (int)$numeroFormatado;
    echo $parteInteira;
   # echo number_format($parteInteira, 0, ",",".");
    ?>
</body>

</html>