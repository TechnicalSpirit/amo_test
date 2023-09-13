<?php

use Lev\Bizandsoft02\DataProvider\ContactDataProvider;

include_once "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$dotenv->required([
    'CLIENT_ID',
    'CLIENT_SECRET',
    'REDIRECT_URL',
    'BASE_DOMAIN',
    'CODE'
]);

ContactDataProvider::init();
