<?php

namespace src\product;

abstract class AbstractProduct
{
    public function run()
    {
        $this->beforeExec();
        $this->exec();
        $this->afterExec();
    }

    abstract protected function beforeExec(); 
    abstract protected function exec();
    abstract protected function afterExec();
}