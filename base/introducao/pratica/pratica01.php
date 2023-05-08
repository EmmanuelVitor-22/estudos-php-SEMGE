<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <title>Pratica</title>
</head>

<body>
    <h1>Pratica 01</h1>

    <main>
        <form action="" method="post">
            <label for="numero">Digite um numero qualquer: </label>
            <input type="number" name="number" id="id_number">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <?php
        if (isset($_POST['number'])) {
            $numero = $_POST["number"];
            $antecessor = $numero-1;
            $sucessor =  $numero+1;
            echo "
                <p class=\"exibir\">Antecessor: $antecessor</p>
                <p class=\"exibir\">Numero: $numero</p>
                <p class=\"exibir\">Sucessor: $sucessor</p>
            ";
        } 
// echo " <a href=\"javascript:history.go(-1)\">Voltar ao formulário</a>";
    ?>
</body>
<p class="exibir"></p>
</html>