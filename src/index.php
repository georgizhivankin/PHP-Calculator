<?php
namespace Zhivankin\DeskPROCalculator;
// Load all necessary classes
require_once('../vendor/autoload.php');
// Instantiate the calculator and perform some calculations
$calc = new \Zhivankin\DeskPROCalculator\Calculator;
// Please note that I could not figure out how to specify order of precedense, so the calculator is not working as expected every time
// Perform addition
$calc->setOperation(new \Zhivankin\DeskPROCalculator\Operations\Addition);
$calc->calculate(1, 3); // Answer should be 3
// Perform multiplication
$calc->setOperation(new \Zhivankin\DeskPROCalculator\Operations\Multiplication);
$calc->calculate(1, 3); // Answer should be 7
// Print the result to output
echo $calc->getResult();