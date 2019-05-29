<?php

class A
{
    protected $nic = "ss";
}

class Low extends A
{
    //property
    //method
    public function low()
    {
        return $this->nic;
    }
}

