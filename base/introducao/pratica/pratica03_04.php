
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
    <h1>Pratica 03</h1>

    <main>
        <h2>CONVERTER REAIS EM DOLAR </h2>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="numero">Digite um valor em R$: </label>
            <input type="number" name="valor" id="id_number">
            <input type="submit" value="Gerar Cotação">
        </form>
    </main>

    <?php

$inicio =  date("m-d-Y", strtotime("-7 days"));
$fim =   date("m-d-Y");


    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'05-01-2023\'&@dataFinalCotacao=\'05-08-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
   
    //revisar e entender isso de manipulação e tratamento de JSON 
    $dataJson = json_decode(file_get_contents($url), true);
    $cotacao = $dataJson["value"][0]["cotacaoCompra"];

    $valorEmReal = $_POST["valor"];


    echo $valorEmReal;
    echo "<br>";
    echo $cotacao;
   ?>
</body>
</html>