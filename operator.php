<?php

$a = 80;
$b = 60;

$result = $a + $b;
var_dump($result);

$resultNegative = -$result;
var_dump($resultNegative);

$resultPositive = +$result;
var_dump($resultPositive);

$resultIncrement = ++$result;
var_dump($resultIncrement);

$resultDecrement = --$result;
var_dump($resultDecrement);

$resultModulus = $a % 4;
var_dump($resultModulus);