<?php

require_once 'parentclass.inc.php';

class A
{

    public $error = "This is " . __CLASS__;

    public function __construct()
    {
        echo "construct";
    }

    public function __toString()
    {
        echo "toString method: ";
        return $this->error;
    }

    public function modulo($a, $b)
    {
        return $a % $b;
    }

    public function divide($a, $b)
    {
        return ($a / $b);
    }

    public function __destruct()
    {
        echo "destruct";
    }

}























