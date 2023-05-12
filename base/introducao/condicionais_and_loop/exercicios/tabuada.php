<?php 

$numero = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "" .PHP_EOL;
echo " ************************ " .PHP_EOL;
echo "TABUADA USANDO FOR" .PHP_EOL;
echo " ************************ ";

echo "" .PHP_EOL;
for ($i=1; $i < count($numero ); $i++) { 
    echo "" .PHP_EOL;
    echo " ==============  ".PHP_EOL;
    echo " TABUADA DE $i".PHP_EOL;
    echo " ============== ";
    echo "" .PHP_EOL;
    for ($j=1; $j <=10 ; $j++) { 
       echo " $i X $j = " . $i*$j .PHP_EOL; 
    }
   

}

#usando foreach
echo ""  .PHP_EOL.PHP_EOL;

echo " ************************ " .PHP_EOL;
echo " TABUADA USANDO FOREACH" .PHP_EOL;
echo " ************************ ";

echo "" .PHP_EOL;
foreach ($numero as  $value) {
    echo "" .PHP_EOL;
    echo " ==============  ".PHP_EOL;
    echo " TABUADA DE $value".PHP_EOL;
    echo " ============== ";
    echo "" .PHP_EOL;
    foreach ($numero as  $multi){
      
        echo " $value X $multi = " . ($value*$multi )  .PHP_EOL; 
        //    }
    }
}