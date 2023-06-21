<?php

require_once "resource.php";
use  Model\Employee;
use Service\BonusService;
$employee =  new  Employee("123-232-545-66","Ruan Nuit", "Dev",1000);
$employee2 =  new  Employee("123-232-545-46","Laure Nuit", "Gerente",3000);

$service  = new BonusService();
echo  $service->countTotalBonus();