<?php 
$numbers = [5, 2, 4, 1, 3];

$studentGrades = array(
    "John" => 85,
    "Sarah" => 92,
    "Michael" => 78,
    "Emily" => 88,
    "David" => 90,
    "Olivia" => 95,
    "Daniel" => 87,
    "Sophia" => 91,
    "Jacob" => 83,
    "Emma" => 89
);

// function range($start, $end, int|float $step = 1): array
# onde é definido  inicio (start), fim (end) e um parametro opcional que delimita d
# e qnto em quanto vai ser gerado valor (step)
# TangerCreate an array containing a range of elements
$arr = range(1,10);
foreach ($arr as $item) {
    echo $item;
}

echo PHP_EOL;

#verificar se existe um elemento no array
#in_array: Checks if a value exists in an array (return a bool)
if (in_array("Jacob",$studentGrades)) {
    echo "Existe";
} else {
    echo "Não Existe";
}
echo PHP_EOL;

echo  var_dump((in_array("jose",$studentGrades)));


#verificar se o array existe e qual sua posição
#Searches the array for a given value and returns the first corresponding key if successful
$posicao = array_search("2",$numbers);
echo ($posicao);

#organizar (ordenar) elementos de um array
sort(($studentGrades));
print_r($studentGrades);


















?>