<?php 

function headerList($titulo="", $col1="", $col2=""){
        $titulo_upper= mb_strtoupper($titulo);
        $col1_upper = mb_strtoupper($col1);
        $col2_upper = mb_strtoupper($col2);

    echo "\t     $titulo_upper" .PHP_EOL;
    echo "  $col1_upper \t\t $col2_upper" .PHP_EOL;

}

?>