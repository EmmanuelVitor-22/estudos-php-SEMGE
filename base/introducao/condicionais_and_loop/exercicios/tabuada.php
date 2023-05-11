<?php 

$numero = [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i=1; $i < count($numero ); $i++) { 
    echo "" .PHP_EOL;
    echo " ==== ";
    echo "TABUADA DE $i";
    echo " ====";
        echo "" .PHP_EOL .PHP_EOL;
    for ($j=1; $j <=10 ; $j++) { 
       echo " $i X $j = " . $i*$j .PHP_EOL; 
    }
   

}
?>