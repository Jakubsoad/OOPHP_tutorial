<?php

require_once 'parentclass.inc.php';

class A extends High
{

    public function __construct()
    {
        echo "alfa";
    }

    public function __destruct()
    {
        echo "omega";
    }

    public $aa = 0;

    public function getAa()
    {
        return $this->aa;
    }

    public function changeAa($newAa, $newBb)
    {
        return $this->aa = $newAa+$newBb;
    }


}

class B extends A
{

}






















