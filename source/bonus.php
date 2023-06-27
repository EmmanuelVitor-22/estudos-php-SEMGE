<?php

require_once "resource.php";

use Model\Account\Employee\Developer;
use Model\Account\Employee\Manager;
use Model\CPF;
use Service\BonusService;

$employee =  new Developer(new CPF("123.232.545-66"),"Ruan Nuit", "Dev",1000);
$manager=  new Manager(new CPF("123.232.545-46"),"Laure Nuit", "Gerente",3000);
$manager=  new Manager(new CPF("123.232.545-46"),"Laure Nuit", "Gerente",3000);
$manager=  new Manager(new CPF("123.232.545-46"),"Laure Nuit", "Gerente",3000);

echo $employee->getSalary();
echo PHP_EOL;
$service  = new BonusService();
$service->addBonus($employee);
$service->addBonus($manager);
echo  $service->countTotalBonus();