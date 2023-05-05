<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado do formulario</h1>

    <main>
        <?php 
        # superglobal $_REQUEST é a junção de superglobais $_GET $_POST e $_COOKIE
        # (??) coalescência nula é usado para definir caso não seja recebido o valor. (quase que definir um padão caso não receba nada)
            $nome = $_GET["nome"] ?? null;
            $sobrenome = $_GET["sobrenome"] ?? "Sobrenome não definido";

            echo " <p> Usuario cadastrado foi: <strong> $nome </strong> <strong>$sobrenome</strong></p>";

        ?>
       <!-- voltar para pagina anterior (uma outra forma com html) -->
        <p>
            <a href="javascript:history.go(-1)">voltar para pagina anterior </a>
        </p>
    </main>
</body>
</html>