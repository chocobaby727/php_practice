<?php

namespace src;
require_once "Model.php";
require_once "User.php";
require_once "Company.php";
require_once "./product/Inserter.php";
require_once "./product/SubProductB.php";
require_once "./product/UserInserter.php";

use src\Model;
use src\product\Inserter;
use src\product\SubProductB;
use src\User;
use src\Company;
use src\product\AbstractProduct;
use src\product\UserInserter;

enum HogeEnum: string
{
    case USER = User::class;
    case COMPANY = Company::class;

    /**
     * @return AbstractProduct
     */
    public function description(): AbstractProduct
    {
        return match($this) {
            self::USER => new Inserter(new User(), new UserInserter()),
            self::COMPANY => new SubProductB(),
        };
    }
}

// var_dump(HogeEnum::tryFrom(Company::class)->description());
// $subProductB = HogeEnum::tryFrom(Company::class)->description();
// $subProductB->run();