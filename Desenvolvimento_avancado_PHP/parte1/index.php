<?php

// Utilizando uma biblioteca Composer

require_once "vendor/autoload.php";

use Wead\DigitalCep\Search;

$busca = new Search; 

print_r($busca->getAddressFromZipCode('37207658'));