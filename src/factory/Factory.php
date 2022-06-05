<?php

namespace src\factory;

// require_once "Model.php";
use src\Model;

abstract class Factory
{
    public function create(Model $model, string $usage)
    {
        $this->getProduct($model, $usage);
    }

    abstract protected function getProduct(Model $model, string $usage);
}
