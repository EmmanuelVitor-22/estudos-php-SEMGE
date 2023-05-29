<?php 

    $qtdPatos = 5;

    if(!is_numeric($qtdPatos) || ($qtdPatos <1) || ($qtdPatos>10)){
        echo 'Quantidade de patos é invalido';
        exit;
    }

    for ($i=$qtdPatos; $i > 0 ; $i--) { 
        echo $i !=1 ? "$i patinhos foram passear\n"
                    : "1 patinho foi passear\n";

        echo "Além das montanhas\n";
        echo "para brincar\n";
        echo "A mamãe gritou: \"Quá, quá, quá, quá\"\n";
        if($i == 2){
            echo "Mas só 1 patinho voltou de lá\n";

        }elseif($i == 1){
            echo "Mas nenhum patinho voltou de lá\n";
        }else{
        echo "Mas  só ". ($i-1) ." patinho voltaram de lá\n";
        }
        echo PHP_EOL;
    }

    echo "A mamãe patinha foi procurar\n";
    echo "Além das montanhas, na beira do mar\n";
    echo "A mamãe gritou: \"Quá, quá, quá, quá!\"\n";
    echo "E os $qtdPatos patinhos voltaram de lá\n";

?>