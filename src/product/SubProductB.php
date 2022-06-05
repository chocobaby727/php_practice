<?php

namespace src\product;
require_once "AbstractProduct.php";
use src\product\AbstractProduct;

class SubProductB extends AbstractProduct
{
    public function __construct()
    {
        
    }

    protected function beforeExec() 
    {
        echo 'before exec in SubProductB'.PHP_EOL;
    }

    protected function exec()
    {

    } 

    protected function afterExec()
    {
        
    }
}