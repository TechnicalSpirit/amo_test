<?php

use Lev\Bizandsoft02\CLI\Commands\CreateContacts;
use Lev\Bizandsoft02\CLI\Commands\RegisterAppAmoCRM;
use Symfony\Component\Console\Application;

require_once "bootstrap.php";

$application = new Application();

$application->add(new RegisterAppAmoCRM());
$application->add(new CreateContacts());

$application->run();


