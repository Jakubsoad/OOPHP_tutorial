<?php

require_once 'include/newclass.inc.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$calc = $_POST['calc'];

$calcutor = new Calc($num1, $num2, $calc);

echo $calcutor->calc();


