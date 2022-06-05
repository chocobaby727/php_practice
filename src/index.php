<?php

require_once "factory/SubFactory.php";
use src\factory\SubFactory;
require_once "User.php";
use src\User;
require_once "Company.php";
use src\Company;

$factory = SubFactory::getInstance();
$model = new User();
$product1 = $factory->getProduct($model, 'Inserter');
$product1->run();


$model = new Company();
$product1 = $factory->getProduct($model, 'deleter');
// $product1->run();
