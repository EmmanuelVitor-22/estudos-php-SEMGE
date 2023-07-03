<?php

require_once "resource.php";

use \Service\Auth;
use Model\Employee\Director;
use Model\CPF;

$authenticator = new Auth();
$director = new Director(new CPF("123.456.789-10"),"Jose Santos", 1200);

 $authenticator->login($director, "3333");

