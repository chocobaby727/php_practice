<?php
namespace src\product;
require_once 'InserterStrategy.php';

use src\product\InserterStrategy;

require_once 'Company.php';
use src\Company;

class CompanyInserter implements InserterStrategy
{
    private Company $company;

    public function __construct()
    {
        $this->company = new Company();
    }

    public function insertOne() 
    {
        // echo 'this is insertOne in CompanyInserter'.PHP_EOL;
        $this->company->introduce();
    }

    public function insertMany()
    {
        
    }
}