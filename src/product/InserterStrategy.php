<?php 
namespace src\product;

interface InserterStrategy
{
    public function insertOne();
    public function insertMany();
}