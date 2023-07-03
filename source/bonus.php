<?php

require_once "resource.php";

use Model\Employee\{Developer,Manager,Director, VideoMaker};
use Model\CPF;
use Service\BonusService;

$director = new Director(new CPF("123.232.545-46"), "Luq Nuit",  5000);
$manager = new Manager(new CPF("123.232.545-46"), "Laure Nuit",  4000);
$developer = new Developer(new CPF("123.232.545-66"), "Ruan Nuit",  3000);
$videoMaker = new VideoMaker(new CPF("123.232.545-46"), "Pable luerci",  2000);
//$manager = new Manager(new CPF("123.232.545-46"), "Laure Nuit",  3000);

echo "T" . $developer->getSalary() . PHP_EOL;
echo "R" . $developer->increaseSalary(0.5) . PHP_EOL;
echo "L" . $developer->levelUp() . PHP_EOL;
echo PHP_EOL;

$service = new BonusService();
$service->addBonus($developer);
$service->addBonus($manager);
$service->addBonus($director);
echo $service->countTotalBonus();