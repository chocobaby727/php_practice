<?php

namespace src;
require_once "Model.php";
use src\Model;

class Company implements Model
{
    public function introduce()
    {
        echo 'This is Company Model'.PHP_EOL;
    }
}