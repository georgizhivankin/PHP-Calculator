<?php
namespace Zhivankin\DeskPROCalculator;
// Instantiate the calculator and perform some calculations
$calc = new Calculator();
// Perform addition
$calc->setOperation(new Addition());
$calc->calculate(1, 3); // 4
// Perform multiplication
$calc->setOperation(new Multiplication);
// $calc->calculate(1, 3); // 7
// Print the result to output
echo $calc->getResult();