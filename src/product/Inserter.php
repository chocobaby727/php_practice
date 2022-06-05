<?php

namespace src\product;

require_once "AbstractProduct.php";
require_once "InserterStrategy.php";

use src\Model;
use src\product\AbstractProduct;
use src\product\InserterStrategy;

class Inserter extends AbstractProduct
{
    private Model $model;
    private $strategy;

    public function __construct(Model $model, InserterStrategy $strategy)
    {
        $this->model = $model;
        $this->strategy = $strategy;
    }

    protected function beforeExec() 
    {
        echo 'before exec in Inserter'.PHP_EOL;
    }

    protected function exec()
    {
        $this->strategy->insertOne();
    }

    protected function afterExec()
    {

    }
}