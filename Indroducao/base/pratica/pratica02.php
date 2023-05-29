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
    <h1>Pratica 02</h1>

    <main>
        <h2>GERAR NUMERO ALEATÓRIO</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="">
           <h3>Será sorteado um numero entre 0 e 50:</h3>
           <?php
        $numero = mt_rand(1,50);
       echo" <p>O numero sorteado é: <strong>$numero</strong></p>"
    ?>
            <input type="submit" value="Sortear">
        </form>
    </main>
   
</body>
</html>