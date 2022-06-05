<?php
namespace src\product;
require_once 'InserterStrategy.php';
use src\product\InserterStrategy;

require_once 'User.php';
use src\User;


class UserInserter implements InserterStrategy
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function insertOne() 
    {
        // echo 'this is insertOne in UserInserter'.PHP_EOL;
        $this->user->introduce();
    }

    public function insertMany()
    {

    }
}