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

?>