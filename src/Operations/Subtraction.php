<?php
namespace Zhivankin\DeskPROCalculator\Operations;

class Subtraction implements OperatorsInterface
{

    /**
     * Implements the method defined within OperatorsInterface
     *
     * @see \Zhivankin\DeskPROCalculator\Operations\OperatorsInterface::runOperation()
     */
    public function runOperation($number, $result)
    {
        return $result - $number;
    }
}