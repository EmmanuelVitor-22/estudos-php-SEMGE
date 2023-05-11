<?php 

$numberArr = [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15 ];

foreach ($numberArr as $numberElement) {
   if (($numberElement %2) !=0) 
        echo "O numero $numberElement é iímpar." .PHP_EOL;
}

?>