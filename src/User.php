<?php

namespace src;
require_once "Model.php";
use src\Model;

class User implements Model
{
    public function introduce()
    {
        echo 'This is User Model'.PHP_EOL;
    }
}