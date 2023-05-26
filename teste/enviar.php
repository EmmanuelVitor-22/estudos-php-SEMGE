<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $msg = $_POST["mensagem"];

    ?>
    <p>Nome cadastrado: <?= $nome?></p>
    <p>Email cadastrado: <?= $email?></p>
    <p>Mensagem cadastrada: <?= $msg?></p>
</body>
</html>