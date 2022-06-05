<?php

namespace src\factory;
use src\Model;
require_once 'HogeEnum.php';
use src\HogeEnum;
require_once 'Factory.php';
use src\factory\Factory;
// require_once '../product/Inserter.php';
// use src\product\Inserter;

class SubFactory extends Factory
{
    private static ?SubFactory $instance = null;

    private function __construct()
    {
        // echo 'SubFactory is a singleton object'.PHP_EOL;
    }

    public function getProduct(Model $model, string $usage)
    {
        try {
            return match($usage) {
                'Inserter' => HogeEnum::tryFrom($model::class)->description(),
            };
        } catch (\UnhandledMatchError $e) {
            echo '対象のクラスは存在しない'.PHP_EOL;
        }
    }

    public static function getInstance()
    {
        if(is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}