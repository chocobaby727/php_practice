<?php 

namespace src\abstractFactory;

use src\Model;

abstract class AbstractFactory
{
    public static final function createFactory(Model $model)
    {
        // HogeEnum::from(User::class);
    }
}

// enum HogeEnum: string
// {
//     case USER = User::class;
//     case COMPANY = Company::class;

//     /**
//      * @return AbstractProduct
//      */
//     public function description(): AbstractProduct
//     {
//         return match($this) {
//             self::USER => new Inserter(new User(), new UserInserter()),
//             self::COMPANY => new SubProductB(),
//         };
//     }
// }