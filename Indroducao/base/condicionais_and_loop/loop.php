<?php 
#estrutura de repetição

#while
$contador = 0;
echo 'WHILE'.PHP_EOL;
while ($contador <= 10) {
    echo "Numero é  $contador " .PHP_EOL;
    $contador++;
}
echo PHP_EOL;
echo "DO WHILE" .PHP_EOL;
$cont=0;
do {
    echo "Fez enqunato o contador não foi atingido: passou-> $cont  ".PHP_EOL;
    $cont = $cont+1;
} while ($cont <= 10);

echo PHP_EOL;

#for
echo "FOR" .PHP_EOL;

$limite = 10;
for ($i=0; $i < $limite; $i++) { 
    echo "i = $i " .PHP_EOL;
}


$arr = [1, 2, 3, 4];
foreach ($arr as &$valor) {
    $valor = $valor * 2;
}

?>

