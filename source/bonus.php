<?php

require_once "resource.php";

use Model\Employee\Developer;
use Model\Employee\Manager;
use Model\Employee\Director;
use Model\CPF;
use Service\BonusService;

$director = new Director(new CPF("123.232.545-46"), "Luq Nuit", "Diretor", 5000);
$manager = new Manager(new CPF("123.232.545-46"), "Laure Nuit", "Gerente", 3000);
$developer = new Developer(new CPF("123.232.545-66"), "Ruan Nuit", "Dev", 1000);
$manager = new Manager(new CPF("123.232.545-46"), "Laure Nuit", "Gerente", 3000);
$manager = new Manager(new CPF("123.232.545-46"), "Laure Nuit", "Gerente", 3000);

echo "T" . $developer->getSalary() . PHP_EOL;
echo "R" . $developer->increaseSalary(0.5) . PHP_EOL;
echo "L" . $developer->levelUp() . PHP_EOL;
echo PHP_EOL;

$service = new BonusService();
$service->addBonus($developer);
$service->addBonus($manager);
$service->addBonus($director);
echo $service->countTotalBonus();