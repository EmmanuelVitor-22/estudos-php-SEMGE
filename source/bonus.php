<?php

require_once "resource.php";

use Employee\Developer;
use Employee\Director;
use Employee\Manager;
use Model\CPF;
use Service\BonusService;

$employee = new Developer(new CPF("123.232.545-66"), "Ruan Nuit", "Dev", 1000);
$manager = new Manager(new CPF("123.232.545-46"), "Laure Nuit", "Gerente", 3000);
$director = new Director(new CPF("123.232.545-46"), "Luq Nuit", "Diretor", 5000);

echo "T" . $employee->getSalary() . PHP_EOL;
echo "R" . $employee->increaseSalary(0.5) . PHP_EOL;
echo "L" . $employee->levelUp() . PHP_EOL;
echo PHP_EOL;
$service = new BonusService();
$service->addBonus($employee);
$service->addBonus($manager);
$service->addBonus($director);
echo $service->countTotalBonus();