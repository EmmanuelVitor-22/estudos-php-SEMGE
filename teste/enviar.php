<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <?php 
    
    if ((isset($nome) && !empty($nome)) && (isset($msg) && !empty($msg))){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $msg = $_POST["mensagem"];
    }
    ?>

    <?php 
        if(  (!empty($nome) && !empty($msg))) {
            if ($nome === "Emmanuel" && ($email === "e@gmail.com")) {  
                echo "<div class=\"wrapper\" >";
                    echo "<div class=\"result\" >";
                        echo "<p class=\" p_result\">Nome cadastrado: <b> $nome</b></p>";
                        echo "<p class=\" p_result\">Email cadastrado: <b> $email</b></p>";
                        echo "<p class=\" p_result\">Mensagem cadastrada: <b> $msg </b></p>";
                    echo "</div>";
                echo "</div>";
            }else{
                echo  "<div class=\"result\" >";
                    echo  "<p class=\" p_result\">usuario ou email não reconhecidos</p>";
                echo "</div>";
            }
    }else{
        echo  "<div class=\"result\" >";
            echo "<p class=\" p_result\">Por favor, preencha os campos que são obrigatórios</p>";
        echo "</div>";
    }
    
    ?>


<p>
    <a href="javascript:history.go(-1)">voltar para pagina anterior </a>
</p>
</body>
</html>